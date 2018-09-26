var urlmensajes = 'https://localhost/GCCHAT/php/mensajesprivados.php';
new Vue({
    el: '#privados',
    created: function() {
        this.getmensajes();
        this.traerdatos();
        this.timer = setInterval(this.traerdatos, 1000);
        //this.timer = setInterval(this.enviarmensaje, 1000);
    },
    data: {
        timer:'',
        msg: '',
        datos: 'datos',
        mensajejson: [],
        mensajes: [],
    },
    methods: {
        getmensajes: function() 
        {
            this.$http.get(urlmensajes).then(function(response){
                this.mensajejson = response.data;
            });
        },
        enviarmensaje: function(msg) 
        {
            this.$http.post('php/guardarprivados.php',{
                message: this.msg
            }).then(function(response){
                this.mensajejson = response.data;
                this.msg="";
            }, function(){
                alert("error");
            });
        }
        ,
        traerdatos: function(datos)
        {
            this.$http.post('php/guardarprivados.php',{
                datos: this.datos
            }).then(function(response){
                this.mensajejson = response.data;
            }, function(){
                alert("error");
            });
        },
        scrollToEnd() {
            var container = document.querySelector("#chatscroll");
            var scrollHeight = container.scrollHeight;
            container.scrollTop = scrollHeight;
        }
    }
});
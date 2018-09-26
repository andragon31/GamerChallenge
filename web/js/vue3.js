var urlmensajes = 'https://gamerchallenge.herokuapp.com/php/mensajes2.php';
new Vue({
    el: '#usuarios',
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
        addmsg: function ()
        {
            this.mensajes.push(this.msg);
            this.msg = '';
        },
        enviarmensaje: function(msg) 
        {
            this.$http.post('php/guardarmensaje2.php',{
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
            this.$http.post('php/guardarmensaje2.php',{
                datos: this.datos
            }).then(function(response){
                this.mensajejson = response.data;
            }, function(){
                alert("error");
            });
        }

    }
});
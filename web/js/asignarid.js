
new Vue({
    el: '#asignarid',
    created: function() {

    },
    data: {
        msg: '',
        datos: 'datos',
        mensajejson: [],
        mensajes: [],
    },
    methods: {
        asignarprivado: function(num) 
        {
            alert(num);
            console.log(num);
            
            this.$http.post('php/guardarprivados.php',{
                id: this.num
            }).then(function(response){
                console.log("bien");
            }, function(){
                alert("error");
            });
            
        }
    }
});
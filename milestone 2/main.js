const app = new Vue({


    el: '#root',

    data: {
        dischi: [],
        generi: [],
        dischi_visibili: [],
    },
    


    mounted(){
        axios
        .get('./database.php')
        .then(object => {
          this.dischi = object.data.response;
          console.log(this.dischi);
        }).catch(error => {
          console.log(error);
        })
    }

})
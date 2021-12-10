const app = new Vue({


    el: '#root',

    data: {
        dischi: [],
        generi: [],
        dischi_visibili: [],
        selected: 'All',

    },
    
    methods:{

        /* ---------  funzione per filtrare le card  -----------  */

        filterCD(){     
            this.dischi_visibili = [];
            for (let i = 0; i < this.dischi.length; i++) {
                const element = this.dischi[i];
                if(this.selected == 'All' || this.selected == element.genre){
                    this.dischi_visibili.push(element);
                }
            }
        },

        /* ---------  funzione per creare una lista di generi senza ripetizioni  -----------  */

        categoryListGenerator(){
            for (let i = 0; i < this.dischi.length; i++) {
                const element = this.dischi[i];
                if(!this.generi.includes(element.genre)){
                    this.generi.push(element.genre);
                }
            }
        }
    },

    mounted(){


        /* ---------  chiamata axios al file database.php  -----------  */

        axios
        .get('./database.php')
        .then(object => {
          this.dischi = object.data.response;
          this.categoryListGenerator();
          this.dischi_visibili = object.data.response;
        }).catch(error => {
          console.log(error);
        })  
    }
})
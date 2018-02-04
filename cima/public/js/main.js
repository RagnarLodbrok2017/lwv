new Vue({
    el: "#app",
    data: {
        disabledWhenSelected: false,
        film: "",
        showActor: false,
        actors: [],
    },
    methods: {
        GetActors: function () {
            if (this.film !== '') {
                this.showActor = true;
                this.GetActorsFromDB(this.film);
            } else {
                this.showActor = false;
            }
        },
        GetActorsFromDB: function (id) {
            this.$http.get('/film/' + id).then(
                function (response) {
                    if(response.body[0].actor.length > 0 )
                    {
                        this.disabledWhenSelected = true;
                        this.actors = response.body[0].actor;
                        this.disabledWhenSelected = false;
                    }
                    else{
                        this.showActor = false;
                    }
                },
                function (reason) {
                    //error
                }
            );
        }
    }
});
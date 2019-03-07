Vue.config.devtools = true;
window.app = new Vue({
    el: '#app',
    data: {
        posts: []
    },
    beforeCreate: function () {
        var _this = this;
        
        axios
            .get("/api/articles")
            .then(
                function(response){ 
                    this.app.posts = response.data;                                
                })
    },
    computed: {
        showAlert() {
            return this.name.length > 4 ? true : false
        }
    }
})
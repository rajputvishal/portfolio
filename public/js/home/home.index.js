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
    onMount: function(){

    },
    computed: {
        postPreviews: function () {                        
            this.posts.forEach(element => {
                element.content = [element.content.shift()];                
            });
            console.log(this.posts);
            return this.posts;
        }
    }
})
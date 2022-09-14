jQuery(document).ready(function ($) {
    
    const APP = new Vue({
        el: '#vue-search-container-desktop',
        data: {
            'posts': []
        },
        methods: {
            getResult() {
                let searchString = $('#input-txt-search-desktop').val();
                axios.get(api_url.url + '?search=' + searchString + '&per_page=4&page=1').then(response => {
                    this.posts = [];
                    for (let i = 0; i < response.data.length; i++) {
                        this.posts.push(response.data[i]);
                    };
                })
            }
        }
    });

    const monileAPP = new Vue({
        el: '#vue-search-container-mobile',
        data: {
            'posts': []
        },
        methods: {
            getResult() {
                let searchString = $('#input-txt-search-mobile').val();
                axios.get(api_url.url + '?search=' + searchString + '&per_page=4&page=1').then(response => {
                    this.posts = [];
                    for (let i = 0; i < response.data.length; i++) {
                        this.posts.push(response.data[i]);
                    };
                })
            }
        }
    });


})
window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data: {
        searchInput: ''
    },
    methods: {
        showPotentialResults(query) {
            let programs = document.getElementsByClassName('data-program');
            for(let program of programs) {
                program.style.display = 'block';
                if(!program.dataset.slug.startsWith(query.toLowerCase()) && !program.dataset.title.toLowerCase().startsWith(query.toLowerCase())) {
                    program.style.display = 'none';
                }
            }
        }
    },
    watch: {
        searchInput(val) {
            this.showPotentialResults(val);
        }
    }
});
export default {
    methods: {
        handleClick(item) {
            this.lastClicked = item;
        },
        back() {
            window.history.back()
        },

    },

    
}
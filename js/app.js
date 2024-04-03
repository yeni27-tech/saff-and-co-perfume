document.addEventLlistener('alpine:init', () =>  {
    Alpine.data('product', () => ({
        items: [
            { id:1211, name: ''+'', img: '', },
        ],
    }));
});
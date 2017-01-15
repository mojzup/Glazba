new Vue({
    el: 'body',
    data: {
      products: [],
      loading: false,
      noresult: 'Showing all products',
      query: ''
  },
  methods: {
    search: function() {
        // Clear the error message.
        this.noresult = '';
        // Empty the products array so we can fill it with the new posts.
        this.products = [];
        // Set the loading property to true, this will display the "Searching..." button.
        this.loading = true;

        // Making a get request to our API and passing the query to it.
        this.$http.get('/api/search?q=' + this.query).then((response) => {
            // If there was an error set the error message, if not fill the posts array.
            response.body.error ? this.noresult = response.body.error : this.products = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
    }
  }
});
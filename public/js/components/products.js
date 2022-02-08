Vue.component('products', {
    data: function () {
        return {
            products: [],
        }
    },

    props: {
        
    },

    methods: {
        addToCart(product) {
            product.stock--;

            this.$root.$emit('add-to-cart', product);
        },
    },

    created() {
        let self = this;

        // Get all products calling function in controller (Ajax call)
        axios({
            method: 'GET',
            url: 'home/products',
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(function(response) {
            self.products = response.data.products;
        }).catch(function(response) {

        })
    },

    template: `
    <div class="row">
    <div class="col-md-4 pt-3" v-for="product in products">
        <div class="card border-0">
            
            <img :src="'/public/images/webshop/' + product.image" class="img_items card-img-top shadow rounded-top" alt="...">
        
            <div class="card_body_items card-body">
                <h5 class="card-title fs-3 fw-bold">{{ product.name }}</h5>
                <p class="card-text">{{ product.description }}</p>
                <p class="card-text"> € {{ product.price }}</p>
                <p>Voorraad: {{ product.stock }}</p>
                <div class="row">                       
                    <input type="button" class="col-md-4 fs-5 btn position-absolute bottom-0 start-0 my-1 mx-1" :disabled="product.stock === 0" @click="addToCart(product)" value="Order">                
                    <a :href="'products/' + product.id">Meer info</a>
                    </div>
            </div>
        </div>
    </div>
</div>
        </div>`,
})
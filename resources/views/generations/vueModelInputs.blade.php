<script>

    var app = new vue({
        el: '#userModelInputs',
        data: function() {
            return {
                // insert data here
                complexMode: false, // checker for if complex generator i requested
                top_pMin: 0.0,
                top_pMax: 1,
                test_input: ""

            }

        },
        methods: {
            // insert methods here
        },
        computed: {
            // insert computed methods here
            checkMeOnEveryChange: function() {
                if (this.test_input) {
                    return true;
                }
                else {
                    return false;
                }
            }
        }
    })
</script>
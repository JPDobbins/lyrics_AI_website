@extends('layouts/app')

<!-- @extends('generations/vueModelInputs') -->

@section('content')
    <h1>Insert form for lyrics generator</h1>
        <!-- form action goes to custom function to handles Language modeling and processing for sotre / sharing etc -->

        <div id="userModelInputs">
            <form action="{{ route('generations.output') }}" method="post">
                @csrf

            <!--If simple generator selected: - 
                - default values for temperature , topk, topp automatically filled
                - input fields are disabled-->

                <div class="form-group-inline">
                    <input class="form-check-input" type="radio" name="genRadios" id="simpleGen" value="option1" checked>
                    <label class="form-check-label" for="genRadios1">
                        Simple Generator
                    </label>
                </div>
            <!-- If complex generator selected: - 
                - alert generated that confirms the choice of the user 
                - tracks inputs as typed into fields to ensure valid entries are inputted-->

                <div class="form-check-inline" id="complexGenChecker">
                    <input class="form-check-input" type="radio" name="genRadios" id="complexGen" value="option2">
                    <label class="form-check-label" for="genRadios2">
                        Complex Generator
                    </label>
                </div>


                
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Length of lyrics</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="length" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <!-- Temperature input -->
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Temperature</span>
                    </div>
                    <input v-bind:disabled="" type="text" class="form-control" name="Temperature" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <p> 
                    <span v-if="checkMeOnEveryChange">
                    <!--   insert message warning of invalid error--> Temperature should be between 0.5 and 1
                    <a class="btn btn-secondary" href="https://www.nature.com/articles/srep19133">See more<a>
                    </span>
                </p>
                



                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Top_K</span>
                    </div>
                    <input type="text" class="form-control" name="topK" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <p>
                    <span v-if="">
                        <!-- insert message warning of invalid error--> Top_k should be at least 30 to provide optimal results
                        <a class="btn btn-secondary" href="https://arxiv.org/pdf/1805.04833.pdf">See more<a>
                    </span>
                </p>



                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Top_P</span>
                    </div>
                    <input type="text" class="form-control" name="topP" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <p>
                    <span v-if="checkTopP">
                        <!-- insert message warning of invalid error--> Top_p needs to be between 0 and 1
                        <a class="btn btn-secondary" href="https://arxiv.org/pdf/1904.09751.pdf">See more<a>
                    </span>
                </p>


                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Lyrics Name</span>
                    </div>
                    <input type="text" class="form-control" name="topK" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>




                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter text to be submitted to AI</label>

                    <textarea class="form-control" name="model-input" rows="3"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
@endsection

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
            },
            checkTopP: function() {
                if (topP > 1 ||rn true;
                } topP < 0) {
                    retu
                else {
                    return false;
                }
            }
            checkTopK: function() {
                if (topK < 30) {
                    return true;
                }
                else {
                    return false;
                }
            }
        }
    })
</script>
<div class="form-input">
    <label class="lh-1 text-16 text-light-1">{{ $label }}</label>
    <select id="{{ $idName }}" name="{{ $fieldName }}@if($isMultiple)[]@endif" @if($isMultiple) multiple="multiple"
        @endif required>
    </select>
</div>

<script>
    var currentRequest = null;

    $(document).ready(function() {
        // Initialize Select2 with the API URL
        $('#{{ $idName }}').select2({
            placeholder: '{{ $placeholder }}', // Ensures placeholder is properly handled as a string
            ajax: {
                url: '{{ $route }}', // Ensures URL is interpreted correctly in JavaScript
                dataType: 'json',
                delay: 250, // Optional delay to throttle requests and improve performance
                data: function (params) {
                    return {
                        term: params.term // Pass the search term to the API
                    };
                },
                beforeSend: function(jqXHR) {
                    // If a request is ongoing, abort it
                    if (currentRequest != null) {
                        currentRequest.abort();
                    }
                    // Save the current request so it can be aborted if needed
                    currentRequest = jqXHR;
                },
                processResults: function (data) {
                    return {
                        results: data.results // Process and return the results from the API
                    };
                },
                cache: true // Cache the response to improve performance
            }
        });
    });
</script>
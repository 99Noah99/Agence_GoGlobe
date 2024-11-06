<div class="col-4">
    <div class="form-input ">
        <label class="lh-1 text-16 text-light-1">Pays</label>
        <select id="recherche_pays" name="Id_Pays" required>
        </select>
    </div>
</div>
<div class="col-4">
    <div class="form-input ">
        <label class="lh-1 text-16 text-light-1">Region</label>
        <select id="recherche_region" name="Id_Region" required>
        </select>
    </div>
</div>
<div class="col-4">
    <div class="form-input ">
        <label class="lh-1 text-16 text-light-1">Ville</label>
        <select id="recherche_ville" name="Id_Ville" required>
        </select>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Initialiser Select2 avec l'URL de l'API
        $('#recherche_pays').select2({
            placeholder: 'Sélectionnez un pays',
            ajax: {
                url: "{{ route('recherche_pays') }}",
                dataType: 'json',
                delay: 0,
                data: function (params) {
                    return {
                        term: params.term // Terme de recherche
                    };
                },
                processResults: function (data) {
                    return {
                        results: data.results
                    };
                },
                cache: true
            }
        });

        $('#recherche_region').select2({
                placeholder: 'Sélectionnez une région',
                ajax: {
                    url: function () {
                        let countryId = $('#recherche_pays').val();
                        return '/recherche/region/' + countryId;
                    },
                    dataType: 'json',
                    delay: 0,
                    processResults: function(data) {
                        return { results: data.results };
                    }
                }
            });

        
                    // Initialisation du champ Select2 pour les villes
            $('#recherche_ville').select2({
                placeholder: 'Sélectionnez une ville',
                ajax: {
                    url: function () {
                        let regionId = $('#recherche_region').val();
                        return '/recherche/ville/' + regionId;
                    },
                    dataType: 'json',
                    delay: 0,
                    processResults: function(data) {
                        return { results: data.results };
                    }
                }
            });
        // Lorsque le pays est sélectionné, recharge les régions
        $('#recherche_pays').on('change', function() {
                let countryId = $(this).val();

                if (countryId) {
                    $('#recherche_region').removeAttr('disabled');
                    $('#recherche_region').val(null).trigger('change'); // Reset du champ région
                    $('#recherche_ville').val(null).trigger('change'); // Reset du champ ville
                    $('#recherche_ville').attr('disabled', 'disabled'); // Désactive les villes en attendant
                } else {
                    $('#recherche_region').attr('disabled', 'disabled');
                    $('#recherche_ville').attr('disabled', 'disabled');
                }
            });

            // Lorsque la région est sélectionnée, recharge les villes
            $('#recherche_region').on('change', function() {
                let regionId = $(this).val();

                if (regionId) {
                    $('#recherche_ville').removeAttr('disabled');
                    $('#recherche_ville').val(null).trigger('change'); // Reset du champ ville
                } else {
                    $('#recherche_ville').attr('disabled', 'disabled');
                }
            });
    });
</script>
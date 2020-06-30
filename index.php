<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/pays/logo.jpg" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <!-- <link rel="stylesheet" href="css/jquery.datepicker2.css"> -->
  <link rel="stylesheet" type="text/css" href="css/mdtimepicker.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="css/fm.selectator.jquery.css" rel="stylesheet" type="text/css">


</head>

<body>

  <!-- Start your project here-->
  <main>
    <!-- Default form login -->

    <div class="row">

      <div class="wrapper">

        <form class="text-center border border-light p-5 boxshadow" method="post" id="formId">
          <h2 class="my_dark p-3 h2   radius text-white">DECLARATION DE NAISSANCE</h2>
          <header style="width: 100%; margin: 30px auto;">
            <div class="row">
              <div class="m-auto p-0 mb-2" style="max-width: 900px; min-width: 300px;">
                <div class="float-left mr-5 ">
                  <img src="./img/armoirie.png" alt="" width="120">
                </div>
                <div class="float-right ml-5"><img src="./img/logo.jpg" alt="" width="120"></div>
              </div>

            </div>
          </header>


          <!-- Numéro -->
          <div id="success_message"></div>
          <div class="row">
            <section id="personnal" style="widows: 100%;">
              <div class="row">
                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="numero" name="numero" class="form-control  " placeholder="Numéro">
                  <span class=" text-danger mb-4 h6" id="error_numero"></span>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="nom" name="nom" class="form-control  " placeholder="Nom">
                  <span class=" text-danger mb-4" id="error_nom"></span>
                </div>
                <!-- <div class="col-md-6 col-12"></div> -->
                <!-- Fin Numéro -->

                <!-- Nom -->
                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenoms">
                  <span class="text-danger" id="error_prenom"></span>
                </div>

                <!-- Fin Nom -->

                <!-- Sexe -->
                <div class="col-12 col-md-6  mb-4">
                  <div class="row flex-lg-fill m-auto">                    
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="homme" name="genre" value="M" checked>
                      <label class="custom-control-label" for="homme">Homme</label>&nbsp;&nbsp;&nbsp;                                                              
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="femme" name="genre" value="F">
                      <label class="custom-control-label" for="femme">Femme</label>&nbsp;&nbsp;&nbsp;
                    </div>
                  </div>

                </div>

                <!-- <div class="col-12 col-md-6">
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample1"
                      name="groupOfDefaultRadios">
                    <label class="custom-control-label" for="defaultGroupExample1">F</label>
                  </div>
                </div> -->
                <!-- <div class="col-2"></div> -->

                <!-- Fin sexe -->

                <!-- Prénoms -->
                <!--             
                <div class="col-md-6 col-12">
                </div> -->
                <!-- Fin Prénom -->

                <!-- Date de Naissance -->
                <div class="col-md-6 col-12 mb-4">
                  <input type="date"  id="dateDeNaissance" name="dateDeNaissance" class="form-control" id="datepicker" placeholder="Date de naissance">
                  <span class="text-danger" id="error_dateDeNaissance"></span>
                </div>
                <!-- FIN Date de Naissance -->
                <!-- heure de naissance -->
                <div class="col-md-6 col-12 mb-4">
                  <input type="time"  id="heureDeNaissance" name="heureDeNaissance" class="form-control  " placeholder="Heure de naissance" title="Heure de naissance">
                  <span class="text-danger" id="error_heureDeNaissance"></span>
                </div>

                <!-- Lieu de Naissance -->
                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="lieuDeNaissance" class="form-control " name="lieuDeNaissance" placeholder="Lieu de Naissance">
                  <span class="text-danger" id="error_lieuDeNaissance"></span>
                </div>
                <!-- <div class="col-md-6 col-12">
                </div> -->
                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="lieuDeclaration" class="form-control" name="lieuDeclaration" placeholder="Lieu de Declaration">
                  <span class="text-danger" id="error_lieuDeclaration" ></span>
                </div>
                <!-- <div class="col-md-6 col-12">
                </div> -->
                <div class="col-md-6 col-12 mb-4">
                  <input type="date" id="dateDeclaration" class="form-control" name="dateDeclaration" placeholder="Date de declaration" title="Date de déclaration">
                  <span class="text-danger" id="error_dateDeclaration"></span>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <input type="file" id="pieceDateDeclaration" class="form-control  " placeholder="Piece date de déclaration">
                  <span></span>
                </div>


                <!-- identité du père -->

                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="identitePere" class="form-control" name="identitePere" placeholder="Identité du père">                  
                  <span class="text-danger" id="error_identitePere" ></span>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <input type="file" id="pieceIdentitePere" class="form-control" name="pieceIdentitePere" placeholder="Piece jonte">
                </div>

                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="professionPere" class="form-control" name="professionPere" placeholder="Profession du père">
                  <span class="text-danger" id="error_professionPere"></span>
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <select class="browser-default custom-select" id="nationalitePere" name="nationalitePere">
                    <option value="Afrique du sud" data-left="./img/pays/afrique_du_sud.png">Afrique du sud
                    </option>
                    <option value="Algérie" data-left="img/pays/algerie.png">
                      Algérie</option>
                    <option value="Angola" data-left="img/pays/angola.png">Angola</option>
                    <option value="Benin" data-left="img/pays/benin.png">Benin</option>
                    <option value="Burandi" data-left="img/pays/burandi.png">Burandi</option>
                    <option value="Botswana" data-left="img/pays/botswana.png">Botswana</option>
                    <option value="Burkina Faso" data-left="img/pays/burkina_faso.png">Burkina Faso</option>
                    <option value="Burundi" data-left="img/pays/burundi.png">Burundi</option>
                    <option value="Cameroun" data-left="img/pays/cameroon.png">Cameroun</option>
                    <option value="Cap Vert" data-left="img/pays/cap_vert.png">Cap Vert</option>
                    <option value="Republique centrafricaine" data-left="img/pays/central_african_republic.webp">Republique centrafricaine
                    </option>
                    <option value="Comores" data-left="img/pays/comores.png">Comores</option>
                    <option value="Republique du congo" data-left="img/pays/republique_du_congo.png">Republique du congo</option>
                    <option value="Republique Démocratique du congo" data-left="img/pays/republique_democratique_du_congo.png">Republique Démocratique
                      du congo</option>
                    <option value="Côte d'Ivoire" data-left="img/pays/cote_dIvoire.png">Côte d'Ivoire</option>
                    <option value="Djibouti" data-left="img/pays/benin.png">Djibouti</option>
                    <option value="Egypte" data-left="img/pays/egypte.png">Egypte</option>
                    <option value="Érythrée" data-left="img/pays/eritrea.webp">Érythrée</option>
                    <option value="Éthiopie" data-left="img/pays/ethiopie.png">Éthiopie</option>
                    <option value="Gabon" data-left="img/pays/gabon.png">Gabon</option>
                    <option value="Gambie" data-left="img/pays/gambie.png">Gambie</option>
                    <option value="Ghana" data-left="img/pays/Ghana.png">Ghana</option>
                    <option value="Guinée" data-left="img/pays/guinee.png">Guinée</option>
                    <option value="Guinée-Bissau" data-left="img/pays/guinee_bissau.png">Guinée-Bissau</option>
                  </select>
                </div>

                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="identiteMere" name="identiteMere" class="form-control" placeholder="Identité de la mère">
                  <span class="text-danger" id="error_identiteMere"></span>                  

                </div>
                <div class="col-md-6 col-12 mb-4">
                  <input type="file" id="pieceIdentiteMere" class="form-control  " placeholder="Piece jonte">
                </div>

                <div class="col-md-6 col-12 mb-4">
                  <input type="text" id="professionMere" class="form-control" name="professionMere" placeholder="Profession mère">
                  <span class="text-danger" id="error_professionMere"></span>                  
                </div>
                <div class="col-md-6 col-12 mb-4">
                  <select class="browser-default custom-select" id="nationaliteMere" name="nationaliteMere">
                    <option selected value="">Nationalité Mère</option>
                    <option value="2" data-left="./img/pays/afrique_du_sud.png">Afrique du sud
                    </option>
                    <option value="3" data-left="img/pays/algerie.png">
                      Algérie</option>
                    <option value="4" data-left="img/pays/angola.png">Angola</option>
                    <option value="5" data-left="img/pays/benin.png">Benin</option>
                    <option value="5" data-left="img/pays/burandi.png">Burandi</option>
                    <option value="5" data-left="img/pays/botswana.png">Botswana</option>
                    <option value="5" data-left="img/pays/burkina_faso.png">Burkina Faso</option>
                    <option value="5" data-left="img/pays/burundi.png">Burundi</option>
                    <option value="5" data-left="img/pays/cameroon.png">Cameroun</option>
                    <option value="5" data-left="img/pays/cap_vert.png">Cap Vert</option>
                    <option value="5" data-left="img/pays/central_african_republic.webp">Republique centrafricaine
                    </option>
                    <option value="4" data-left="img/pays/comores.png">Comores</option>
                    <option value="5" data-left="img/pays/republique_du_congo.png">Republique du congo</option>
                    <option value="5" data-left="img/pays/republique_democratique_du_congo.png">Republique Démocratique
                      du congo</option>
                    <option value="4" data-left="img/pays/cote_dIvoire.png">Côte d'Ivoire</option>
                    <option value="5" data-left="img/pays/benin.png">Djibouti</option>
                    <option value="5" data-left="img/pays/egypte.png">Egypte</option>
                    <option value="5" data-left="img/pays/eritrea.webp">Érythrée</option>
                    <option value="5" data-left="img/pays/ethiopie.png">Éthiopie</option>
                    <option value="5" data-left="img/pays/gabon.png">Gabon</option>
                    <option value="5" data-left="img/pays/gambie.png">Gambie</option>
                    <option value="5" data-left="img/pays/Ghana.png">Ghana</option>
                    <option value="5" data-left="img/pays/guinee.png">Guinée</option>
                    <option value="5" data-left="img/pays/guinee_bissau.png">Guinée-Bissau</option>
                  </select>
                </div>

                <div class="col-10 m-auto"> <button class="btn btn-black" id="next">SUIVANT <i class="fas fa-arrow-right"></i>
                  </button></div>
              </div>



            </section>
            <section id="mention">
              <div class="row">
                <div class="col-md-6 col-12">
                  <input type="text" readonly="readonly" data-select="datepicker" id="dateMariage" class="form-control  " placeholder="Marié(e) le" data-date-format="dd/mm/yyyy">
                </div>
                <div class="col-md-6 col-12">
                  <input type="text" id="lieuMariage" class="form-control  " placeholder="Lieu de mariage">
                </div>
                <div class="col-md-6 col-12">


                  <input type="text" id="NomConjoint" class="form-control  " placeholder="Conjoint(e)">
                </div>
                <div class="col-md-6 col-12">
                  <input type="file" id="pieceMariage" class="form-control  " placeholder="Pièce Mariage">
                </div>

                <div class="col-md-6 col-12">
                  <input type="text" id="divorceLe" class="form-control  " placeholder="Divorcé le">
                </div>
                <div class="col-md-6 col-12">
                  <input type="file" id="pieceDivorce" class="form-control  " placeholder="Piece jonte">
                </div>


                <div class="col-md-6 col-12">
                  <input type="text" readonly="readonly" data-select="datepicker" id="decedeLe" class="form-control  " placeholder="Décédé le " data-date-format="dd/mm/yyyy">
                </div>
                <div class="col-md-6 col-12">
                  <input type="text" id="lieuDeces" class="form-control  " placeholder="Lieu de decès">
                </div>

                <div class="col-md-6 col-12">
                  <input type="text" id="identiteAgent" class="form-control  " placeholder="Identité agent état civil">
                </div>
                <div class="col-md-6 col-12">
                  <input type="text" id="matriculeAgent" class="form-control  " placeholder="Matricule agent">
                </div>
              </div>
            </section>
            <div class="validation m-auto flex-center" id="submit" style="display: none;">
              <div class="row">
                <div class=""><a class="btn btn-outline-danger btn-block my-4" id="previous"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp; Précédent</a>
                </div>&nbsp;&nbsp;&nbsp;
                <div class="">
                  <input class="btn btn-success btn-block my-4" name="validator" type="submit" id="validator" value="Enregistrer">
                </div>
              </div>
            </div>
          </div>
      </div>



    </div>
    </form>
    </div>

    </div>

    <!-- Default form login -->
  </main>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/jquery.datetimepicker.js"></script>
  <!-- Your custom scripts (optional) -->
  <!-- <script src="./js/jquery.datepicker2.js"></script>  -->

  <!-- <script type="text/javascript" src="js/mdtimepicker.js"></script> -->
  <script src="./js/script.js"></script>

  <script src="./js/fm.selectator.jquery.js"></script>


  <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
  <!-- <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
  <script>
    $('#nationalitePere').selectator({
      labels: {
        search: 'Chercher ici...'
      },      
    });
    $('#nationaliteMere').selectator({
      labels: {
        search: 'Chercher ici...'
      },      
    });    
    $(document).ready(function() {
      // $('#heureDeNaissance').mdtimepicker({
      //   timeFormat: 'hh:mm:ss.000', // format of the time value (data-time attribute)
      //   format: 'h:mm tt',    // format of the input value
      //   theme: 'blue',        // theme of the timepicker
      //   readOnly: true,       // determines if input is readonly
      //   hourPadding: false    // determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
      // });
    

      function clear_field() {
        $('#formId')[0].reset();
        $('#error_numero').text('');
        $('#error_nom').text('');
        $('#error_prenom').text('');
        // $('#error_teacher_password').text('');
        // $('#error_teacher_qualification').text('');
        // $('#error_teacher_doj').text('');
        // $('#error_teacher_image').text('');
        // $('#error_teacher_grade_id').text('');
      }

      $('#datepicker').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'Y-m-d',
        value: '2020-6-26',
        weeks: true
      });

      $('#formId').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
          url: "check_login.php",
          method: "POST",
          data: $(this).serialize(),
          dataType: "json",
          beforeSend: function() {
            $('#validator').val('En cours...');
            $('#validator').attr('disabled', 'disabled');
          },
          success: function(data) {
            if (data.success) {
              // afficher le message de success
              // location.href = "http://localhost:82/projet_marie/";
              $("#success_message").append('<div class="alert alert-success text-center">' + data.success + '</div>')
              clear_field()
              $("#previous").click();
              $('#validator').attr('disabled', false);
              $('#validator').val('Enregistrer');
            }
            if (data.error) {
              $('#validator').val('Enregistrer');
              $('#validator').attr('disabled', false);
              if (data.error_numero != '') {
                $('#error_numero').text(data.error_numero);
                console.log(data.error_numero)
              } else {
                $('#error_numero').text('');
              }
              if (data.error_nom != '') {
                $('#error_nom').text(data.error_nom);
              } else {
                $('#error_nom').text('');
              }

              if (data.error_prenom != '') {
                $('#error_prenom').text(data.error_prenom);                
              } else {
                $('#error_prenom').text('');
              }

              if (data.error_dateDeNaissance != '') {
                $('#error_dateDeNaissance').text(data.error_dateDeNaissance);
                
              } else {
                $('#error_dateDeNaissance').text('');
              }
              if (data.error_heureDeNaissance != '') {
                $('#error_heureDeNaissance').text(data.error_heureDeNaissance);                
              } else {
                $('#error_heureDeNaissance').text('');
              }
              if (data.error_lieuDeNaissance != '') {
                $('#error_lieuDeNaissance').text(data.error_lieuDeNaissance);                
              } else {
                $('#error_lieuDeNaissance').text('');
              }

              if (data.error_lieuDeclaration != '') {
                $('#error_lieuDeclaration').text(data.error_lieuDeclaration);                
              } else {
                $('#error_lieuDeclaration').text('');
              }

              if (data.error_dateDeclaration != '') {
                $('#error_dateDeclaration').text(data.error_dateDeclaration);                
              } else {
                $('#error_dateDeclaration').text('');
              }
              if (data.error_identitePere != '') {
                $('#error_identitePere').text(data.error_identitePere);                
              } else {
                $('#error_identitePere').text('');
              }

              if (data.error_professionPere != '') {
                $('#error_professionPere').text(data.error_professionPere);
              } else {
                $('#error_professionPere').text('');
              }
              
              if (data.error_identiteMere != '') {
                $('#error_identiteMere').text(data.error_identiteMere);
              } else {
                $('#error_identiteMere').text('');
              }

              if (data.error_professionMere != '') {
                $('#error_professionMere').text(data.error_professionMere);
              } else {
                $('#error_professionMere').text('');
              }              
            }
          }
        });

      });
    });
  </script>
</body>

</html>
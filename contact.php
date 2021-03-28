<?php
include 'header.php';
?>
            <section id="equipe" class="section-secondary custom-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-bold text-color-dark">Notre équipe</h2>
                        </div>
                    </div>                     
                        <div class="card-group">
                            <div class="card">
                              <img class="card-img-top" src="img/jules.png" alt="Card image jules">
                              <div class="card-body">
                                <h5 class="card-title">JULES GRAEHLING</h5>
                                <p class="card-text">Notre responsable de projet</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jules">
                                    Voir <i class="fas fa-arrow-right"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="img/louis.png" alt="Card image louis">
                              <div class="card-body">
                                <h5 class="card-title">LOUIS SPISER</h5>
                                <p class="card-text">Notre responsable marketing</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#louis">
                                    Voir <i class="fas fa-arrow-right"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="img/tim.png" alt="Card image tim">
                              <div class="card-body">
                                <h5 class="card-title">TIM POIROT</h5>
                                <p class="card-text">Notre community manager</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tim">
                                    Voir <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/oceane.png" alt="Card image océane">
                                <div class="card-body">
                                  <h5 class="card-title">OCÉANE CARDOT</h5>
                                  <p class="card-text">Notre infographiste</p>
                                  <br>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#oceane">
                                    Voir <i class="fas fa-arrow-right"></i>
                                </button>
                                </div>
                              </div>
                              <div class="card">
                                <img class="card-img-top" src="img/theo.png" alt="Card image théo">
                                <div class="card-body">
                                  <h5 class="card-title">THÉO MEYER</h5>
                                  <p class="card-text">Notre développeur Web</p>
                                  <br>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#theo">
                                    Voir <i class="fas fa-arrow-right"></i>
                               	</button>
                                </div>
                              </div>
                          </div>




                        <!-- Modal -->
                        <div class="modal fade" id="jules" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#132135;">JULES GRAEHLING</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body" style="color:#132135;">
                                    Jules GRAEHLING, notre responsable de projet, son but est d’organiser
                                    l’ensemble du groupe afin de rester dans les temps durant l’ensemble du projet. Il aide à la
                                    réalisation l’ensemble des créations, aussi bien dans la création d’éléments graphiques ou
                                    encore dans l’audiovisuel
                                </div>
                            </div>
                            </div>
                        </div>

						<div class="modal fade" id="louis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#132135;">TIM POIROT</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body" style="color:#132135;">
                                  Tim POIROT s’occupe de la partie audio visuelle du groupe en réalisant des pubs, teasers ou encore des animations. Il a également la charge de la partie communication du projet. 
                                </div>
                            </div>
                            </div>
                        </div>

						<div class="modal fade" id="tim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#132135;">LOUIS SPISER</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body" style="color:#132135;">
                                  Louis SPISER a le rôle d'intermédiaire entre le groupe et les intervenants extérieurs. C’est lui va s’occuper de contacter les entreprises pour trouver des partenaires ou encore demander des devis.
                                </div>
                            </div>
                            </div>
                        </div>

						<div class="modal fade" id="oceane" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#132135;">OCÉANE CARDOT</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body" style="color:#132135;">
                                  Océane CARDOT est l’illustratrice et graphiste du groupe. Elle est chargée de réaliser tout ce qui est en rapport avec les visuels de la marque. Cela peut être par exemple des mock ups de vêtements ou encore des illustrations
                                </div>
                            </div>
                            </div>
                        </div>

						<div class="modal fade" id="theo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#132135;">THÉO MEYER</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body" style="color:#132135;">
                                  Théo MEYER, le développeur du groupe. Il s’occupe de l’ensemble du site Web de la marque, d’insérer les visuels des produits. Il réalise toute la partie e-commerce de notre site internet
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>

            <section id="contact" class="section-secondary custom-section-padding">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <h2 class="font-weight-bold text-color-dark ">Nous contacter</h2>
                      </div>
                  </div>
                  <div class="row">
                    <!-- Section Titile -->
                    <div class="col-md-6 mt-3 contact-widget-section2 text-left">
                      <h3 class="font-weight-bold text-color-dark ">Sur nos réseaux sociaux :</h3>
                      <div class="find-widget">
                        <a href="https://www.facebook.com/lapetitefeuilleverte" target="_blank" title="Facebook"><i class="fab fa-facebook"></i> La Petite Feuille Verte</a>
                        </div>
                      <div class="find-widget">
                        <a href="https://www.instagram.com/lapetitefeuilleverte/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i>  @lapetitefeuilleverte</a>
                      </div>
                      <div class="find-widget">
                        <a href="https://twitter.com/LPFV_fr" target="_blank" title="Twitter"><i class="fab fa-twitter"></i>  @LPFV_FR</a>
                      </div>
                      <br>
                    </div>
                    <div class="col-md-6 mt-3 contact-widget-section2 text-left">
                      <h3 class="font-weight-bold text-color-dark ">Par mail :</h3>
                      <div class="find-widget">
                        <a href="mailto:lapetitefeuilleverte@gmail.com" target="_blank" title="Facebook"><i class="fas fa-envelope"></i> lapetitefeuilleverte@gmail.com</a>
                        </div>
                      <br>
                    </div>
                </div>  
              </div>
            </section>
<?php
include 'footer.php';
?>
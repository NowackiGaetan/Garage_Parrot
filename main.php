<main>
        <div class="mecanic">
            <img src="assets/garage1.jpg" alt="image d'un garagiste" class="garagiste" id="list-services">
                <div class="services">
                    <h3>Services</h3>
                    <div class="list-services" >
                        <ul>
                            <li>Entretien et carosserie</li>
                            <li>Révision du véhicule</li>
                            <li>Vidange</li>
                        </ul>
                        <ul>
                            <li>Freinage</li>
                            <li>Pneus et géometrie</li>
                            <li>Réparation et crevaison</li>
                        </ul>
                        <ul>
                            <li>Climatisation</li>
                            <li>Batterie</li>
                            <li>Courroie de distribution</li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="used-cars" id="used-cars">
            <h3>Véhicules d'occasion</h3>
                <p>Filtrer vos recherches:</p>
                <div class="filters">
                    <label for="infoprice">Prix:</label>

                    <select id="infoprice" class="infoprice">
                        <option value="" id="all">--Filtrer par prix:--</option>
                        <option value="Moins de 5000€" id="smallprice"> Moins de 5000€</option>
                        <option value="De 5000 à 10000€" id="mediumprice"> De 5000 à 10000€</option>
                        <option value="De 10000 à 15000€" id="bigprice"> De 10000 à 15000€</option>
                    
                    </select>
                    <label for="kilometre">Kilométrage:</label>

                    <select id="kilometre">
                        <option value="">--Filtrer par kilométrage:--</option>
                        <option value="Moins de 100.000km"> Moins de 100000km</option>
                        <option value="100000km à 150000km"> De 100000km à 150000km</option>
                        <option value="De 150000km à 200000km"> De 150000km à 200000km</option>
                    </select>
                    <label for="year">Année:</label>

                    <select id="year">
                        <option value="">--Filtrer par année:--</option>
                        <option value="Avant 2010"> Avant 2010</option>
                        <option value="2010 à 2015"> De 2010 à 2015</option>
                        <option value="De 2015 à 2023"> De 2015 à 2023</option>
                    </select>
                 </div>
                <div class="list-cars">
                    <div class="card active" data-smallprice >
                        <img src="assets/peugeot-855554_1280.jpg" class="card-img-top" alt="peugeot">
                        <div class="card-body">
                          <h5 class="card-title">Peugeot 206cc</h5>
                          <div class="description-cars">
                            <div class="description-left">
                                <p class="card-text">
                                    1.2L<br>
                                    192120 km<br>
                                    Essence<br>
                                    2004<br>
                                </p>
                            </div>
                            <div class="description-right">
                                <p>8500€</p>
                            </div>
                          </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card active" data-mediumprice >
                        <img src="assets/auto-383897_1280.jpg" class="card-img-top" alt="audi">
                        <div class="card-body">
                          <h5 class="card-title">Audi A1</h5>
                          <div class="description-cars">
                            <div class="description-left">
                                <p class="card-text">
                                    1.2L<br>
                                    73855 km<br>
                                    Essence<br>
                                    2016<br>
                                </p>
                            </div>
                            <div class="description-right">
                                <p>11200€</p>
                            </div>
                          </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card active" data-bigprice>
                        <img src="assets/clio.jpg" class="card-img-top" alt="clio">
                        <div class="card-body">
                          <h5 class="card-title">Renault Clio</h5>
                          <div class="description-cars">
                            <div class="description-left">
                                <p class="card-text">
                                    1.5L<br>
                                    123000 km<br>
                                    Diesel<br>
                                    2011<br>
                                </p>
                            </div>
                            <div class="description-right">
                                <p>10100€</p>
                            </div>
                          </div>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>

        </div>
    </main>
      <header class="header1">
			<div class="container">
            	<div class="row header-row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="logo-wrapper clearfix">
							<div class="logo">
								<a href="{{ URL::to('/') }}" title="Home">
									<img src="images/logo.png" alt="Estate">
								</a>
							</div><!-- /.site-name -->
						</div><!-- /.logo-wrapper -->
                    </div>         
                </div><!-- end row -->
                <nav class="navbar navbar-default fhmm" role="navigation">
                    <div class="menudrop container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div><!-- end navbar-header -->
                        <div id="defaultmenu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <!-- Mega Menu -->
                                <li class="dropdown fhmm-fw active"><a href="{{ URL::to('/') }}"><i class="fa fa-home"></i> Начало</a></li><!-- mega menu -->
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#AdvSearchModal" data-toggle="modal">Разширено търсене</b></a></li><!-- end list elements -->
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#">Последни имоти</b></a></li><!-- end list elements -->
                            </ul><!-- end nav navbar-nav -->
                        </div><!-- end #navbar-collapse-1 -->
                     </div><!-- end dm_container -->
                </nav><!-- end navbar navbar-default fhmm -->
            </div><!-- end container -->

            <!-- ADVANCED SEARCH MODAL DIALOG -->
            <div class="modal fade" id="AdvSearchModal" tabindex="-1" role="dialog" aria-labelledby="AdvSearchModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width: 100%; height: 100%">
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom: none;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="searchmodule clearfix">
                                <form id="advanced_search" action="#" class="clearfix" name="advanced_search" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="country">Country</label>
                                        <select id="country" class="show-menu-arrow selectpicker">
                                            <option value="usa">United States</option>
                                            <option value="turkei">Turkei</option>
                                            <option value="germany">Germany</option>
                                            <option value="israel">Israel</option>
                                            <option value="holland">Holland</option>
                                        </select>                                     
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="location">Location</label>
                                        <select id="location" class="show-menu-arrow selectpicker">
                                            <option value="miami">Miami</option>
                                            <option value="antalya">Antalya</option>
                                            <option value="bodrum">Bodrum</option>
                                            <option value="hanue">Hanue</option>
                                            <option value="aksa">Aksa</option>
                                            <option value="amsterdam">Amsterdam</option>
                                        </select>
                                    </div>                                               
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="status">Status</label>
                                        <select id="status" class="show-menu-arrow selectpicker">
                                            <option value="rent">On Rent</option>
                                            <option value="sale">On Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="type">Type</label>
                                        <select id="type" class="show-menu-arrow selectpicker">
                                            <option value="apertment">Apertment</option>
                                            <option value="condo">Condo</option>
                                            <option value="villa">Villa</option>
                                            <option value="cottage">Cottage</option>
                                            <option value="house">House</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="bedrooms">Bedrooms</label>
                                        <select id="bedrooms" class="show-menu-arrow selectpicker">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="baths">Baths</label>
                                        <select id="baths" class="show-menu-arrow selectpicker">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="min_price">Min Price</label>
                                        <select id="min_price" class="show-menu-arrow selectpicker">
                                            <option value="0">$0</option>
                                            <option value="1000">$1000</option>
                                            <option value="5000">$5000</option>
                                            <option value="10000">$10000</option>
                                            <option value="25000">$25000</option>
                                            <option value="50000+">$50000+</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="max_price">Max Price</label>
                                        <select id="max_price" class="show-menu-arrow selectpicker">
                                            <option value="1000">$1000</option>
                                            <option value="5000">$5000</option>
                                            <option value="15000">$15000</option>
                                            <option value="25000">$25000</option>
                                            <option value="50000">$50000</option>
                                            <option value="100000+">$100000+</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="condition">Condition of Use</label>
                                        <select id="condition" class="show-menu-arrow selectpicker">
                                            <option value="empty">Empty</option>
                                            <option value="tenants">Tenants</option>
                                            <option value="proprietor">Proprietor</option>
                                            <option value="any">Any</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="from_the">From the</label>
                                        <select id="from_the" class="show-menu-arrow selectpicker">
                                            <option value="agent">Agents</option>
                                            <option value="agencie">Agencies</option>
                                            <option value="property_owner">Property Owner</option>
                                            <option value="any">Any</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="#" class="btn btn-inverse btn-block"><i class="fa fa-search"></i> SEARCH PROPERTY</a>
                                    </div>
                                </form>
                                </div><!-- end search module -->
                            </div><!-- end col-lg-4 -->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </header><!-- end header -->
        @yield('header')
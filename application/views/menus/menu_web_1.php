<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<nav>
    <ul class="nav nav-pills" id="mainNav">
        <li class="dropdown-full-color dropdown-quaternary <?php echo $menu_root === '' ? 'active' : ''; ?>">
            <a href="demo-real-estate.html">
                <?php echo trans_line('menu_inicio'); ?>
            </a>
        </li>
        <li class="dropdown-full-color dropdown-quaternary <?php echo $menu_root === 'propiedades' ? 'active' : ''; ?>">
            <a href="demo-real-estate-properties.html">
                <?php echo trans_line('menu_propiedades'); ?>
            </a>
        </li>

        <li class="dropdown dropdown-full-color dropdown-quaternary <?php echo $menu_root === 'acerca' ? 'active' : ''; ?>">
            <a class="dropdown-toggle" href="demo-real-estate-who-we-are.html">
                <?php echo trans_line('menu_acerca'); ?>
            </a>
            <ul class="dropdown-menu">
                <li><a href="demo-real-estate-agents.html"><?php echo trans_line('menu_agentes'); ?></a></li>
                <li><a href="demo-real-estate-who-we-are.html"><?php echo trans_line('menu_nosotros'); ?></a></li>
            </ul>
        </li>
        <li class="dropdown-full-color dropdown-quaternary <?php echo $menu_root === 'contacto' ? 'active' : ''; ?>">
            <a href="demo-real-estate-contact.html">
                <?php echo trans_line('menu_contacto'); ?>
            </a>
        </li>
        <li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega"
            id="headerSearchProperties">
            <a class="dropdown-toggle" href="#">
                <?php echo trans_line('menu_buscar'); ?> <i class="fa fa-search"></i>
            </a>
            <ul class="dropdown-menu custom-fullwidth-dropdown-menu">
                <li>
                    <div class="dropdown-mega-content">
                        <form id="propertiesFormHeader"
                              action="demo-real-estate-properties.html"
                              method="POST">
                            <div class="container p-none">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-control-custom">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesPropertyType"
                                                    data-msg-required="This field is required."
                                                    id="propertiesPropertyType"
                                                    required="">
                                                <option value="">Property Type
                                                </option>
                                                <option value="1">Apartment</option>
                                                <option value="2">House</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesLocation"
                                                    data-msg-required="This field is required."
                                                    id="propertiesLocation"
                                                    required="">
                                                <option value="">Location</option>
                                                <option value="1">Miami</option>
                                                <option value="2">New York</option>
                                                <option value="3">Houston</option>
                                                <option value="4">Los Angeles
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesMinBeds"
                                                    data-msg-required="This field is required."
                                                    id="propertiesMinBeds"
                                                    required="">
                                                <option value="">Min Beds</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesMinPrice"
                                                    data-msg-required="This field is required."
                                                    id="propertiesMinPrice"
                                                    required="">
                                                <option value="">Min Price</option>
                                                <option value="150000">$150,000
                                                </option>
                                                <option value="200000">$200,000
                                                </option>
                                                <option value="250000">$250,000
                                                </option>
                                                <option value="300000">$300,000
                                                </option>
                                                <option value="350000">$350,000
                                                </option>
                                                <option value="400000">$400,000
                                                </option>
                                                <option value="450000">$450,000
                                                </option>
                                                <option value="500000">$500,000
                                                </option>
                                                <option value="550000">$550,000
                                                </option>
                                                <option value="600000">$600,000
                                                </option>
                                                <option value="650000">$650,000
                                                </option>
                                                <option value="700000">$700,000
                                                </option>
                                                <option value="750000">$750,000
                                                </option>
                                                <option value="800000">$800,000
                                                </option>
                                                <option value="850000">$850,000
                                                </option>
                                                <option value="900000">$900,000
                                                </option>
                                                <option value="950000">$950,000
                                                </option>
                                                <option value="1000000">$1,000,000
                                                </option>
                                                <option value="1250000">$1,250,000
                                                </option>
                                                <option value="1500000">$1,500,000
                                                </option>
                                                <option value="1750000">$1,750,000
                                                </option>
                                                <option value="2000000">$2,000,000
                                                </option>
                                                <option value="2250000">$2,250,000
                                                </option>
                                                <option value="2500000">$2,500,000
                                                </option>
                                                <option value="2750000">$2,750,000
                                                </option>
                                                <option value="3000000">$3,000,000
                                                </option>
                                                <option value="3250000">$3,250,000
                                                </option>
                                                <option value="3500000">$3,500,000
                                                </option>
                                                <option value="3750000">$3,750,000
                                                </option>
                                                <option value="4000000">$4,000,000
                                                </option>
                                                <option value="4250000">$4,250,000
                                                </option>
                                                <option value="4500000">$4,500,000
                                                </option>
                                                <option value="4750000">$4,750,000
                                                </option>
                                                <option value="5000000">$5,000,000
                                                </option>
                                                <option value="6000000">$6,000,000
                                                </option>
                                                <option value="7000000">$7,000,000
                                                </option>
                                                <option value="8000000">$8,000,000
                                                </option>
                                                <option value="9000000">$9,000,000
                                                </option>
                                                <option value="10000000">
                                                    $10,000,000
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesMaxPrice"
                                                    data-msg-required="This field is required."
                                                    id="propertiesMaxPrice"
                                                    required="">
                                                <option value="">Max Price</option>
                                                <option value="150000">$150,000
                                                </option>
                                                <option value="200000">$200,000
                                                </option>
                                                <option value="250000">$250,000
                                                </option>
                                                <option value="300000">$300,000
                                                </option>
                                                <option value="350000">$350,000
                                                </option>
                                                <option value="400000">$400,000
                                                </option>
                                                <option value="450000">$450,000
                                                </option>
                                                <option value="500000">$500,000
                                                </option>
                                                <option value="550000">$550,000
                                                </option>
                                                <option value="600000">$600,000
                                                </option>
                                                <option value="650000">$650,000
                                                </option>
                                                <option value="700000">$700,000
                                                </option>
                                                <option value="750000">$750,000
                                                </option>
                                                <option value="800000">$800,000
                                                </option>
                                                <option value="850000">$850,000
                                                </option>
                                                <option value="900000">$900,000
                                                </option>
                                                <option value="950000">$950,000
                                                </option>
                                                <option value="1000000">$1,000,000
                                                </option>
                                                <option value="1250000">$1,250,000
                                                </option>
                                                <option value="1500000">$1,500,000
                                                </option>
                                                <option value="1750000">$1,750,000
                                                </option>
                                                <option value="2000000">$2,000,000
                                                </option>
                                                <option value="2250000">$2,250,000
                                                </option>
                                                <option value="2500000">$2,500,000
                                                </option>
                                                <option value="2750000">$2,750,000
                                                </option>
                                                <option value="3000000">$3,000,000
                                                </option>
                                                <option value="3250000">$3,250,000
                                                </option>
                                                <option value="3500000">$3,500,000
                                                </option>
                                                <option value="3750000">$3,750,000
                                                </option>
                                                <option value="4000000">$4,000,000
                                                </option>
                                                <option value="4250000">$4,250,000
                                                </option>
                                                <option value="4500000">$4,500,000
                                                </option>
                                                <option value="4750000">$4,750,000
                                                </option>
                                                <option value="5000000">$5,000,000
                                                </option>
                                                <option value="6000000">$6,000,000
                                                </option>
                                                <option value="7000000">$7,000,000
                                                </option>
                                                <option value="8000000">$8,000,000
                                                </option>
                                                <option value="9000000">$9,000,000
                                                </option>
                                                <option value="10000000">
                                                    $10,000,000
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" value="Search Now"
                                               class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
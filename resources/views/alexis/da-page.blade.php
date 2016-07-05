<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 4</title>
    <link href="{{ asset('assets/da/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/da/css/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/da/css/style.css') }}" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <header>
                <h3 id="title">Analyzing Accessibility of Persons with Disability to Health Care in Philadelphia, PA</h3>
                <i>Alexis Saenz, Daniel Wiese | Temple University</i>
            </header>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <section class="text-document">
                <h2>Introduction</h2>
                <p>
                    People with disabilities live in a geographic context that influences their quality of life. Geographic Information Systems (GIS) can be used to qualitatively and quantitatively analyze such a context. GIS can be used to create a plan of action that ameliorates the life of people with disabilities. Our analysis will take place in Philadelphia, Pennsylvania to determine the challenges that people with disabilities undertake to access health services such as public health centers and hospitals by public transportation.

                    Today the City of Philadelphia Department of Public Health operates nine Health Centers with barrier-free-access for handicapped people. Additionally, all 32 Community Health Centers and  31 Hospitals provides an access for people in wheelchair and for those with limited physical mobility. But is it also possible to reach cities health services by public transportation? According to South-Eastern Pennsylvania Transportation Authority (SEPTA) all operated fixed-route buses are equipped with a wheelchair lift or ramp. However, many of SEPTA’s subway and regional rail stations still have no access for people with disabilities (SEPTA, 2016). Therefore, it is of an interest to analyze any patterns in distribution of wheelchair accessible stations across Philadelphia and their proximity to health services.

                    Additionally, present analysis should also determine potential service area of each public health facility, and explore its socio-demographical structure in order to order to define any relationships between low access to health services and socio-economical status.
                </p>
            </section>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <section id="options-map">
                        <section id="controls">
                            <form class="form" role="form">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="ch-phl-city" checked> PHL_CityLine
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="ch-phl-bus" checked> PHL_BusRouts
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="ch-phl-train" checked> PHL_TrainStations
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="ch-service-area" checked> ServiceArea_Demography
                                    </label>
                                </div>

                            </form>
                        </section>
                        <section id="percents">


                        </section>
                        <section id="info-map">

                        </section>
                    </section>
                </div>
                <div class="col-sm-9">

                    <div id="map"> </div>

                </div>
            </div>
            <hr>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            <section class="text-document">
                <h2>Data</h2>
                <p>
                    All data for present analysis is free available and include Census Tracts of the City of Philadelphia, PA and demographical structure provided by US Census Bureau, Tiger Lines 2010, as well as information about the population with disabilities which was obtained from the American Community Survey 2012. Centerlines of Streets for Philadelphia area as well as SEPTA train stations and Bus Routes were downloaded from Open Data Philly. Finally, Philadelphia Land Cover grid produced by USGS and a list of all Hospitals and Health Centers in Philadelphia were free available on PASDA.
                </p>
                <h2>Methods</h2>
                <p>
                    Secondary analysis of data obtained from existing sources will be used to establish demand of accessibility to medical centers for population with physical disabilities in Philadelphia, PA, and include seven primary stages:
                    <ol>
                        <li>
                            Census Data Preparation
                <p>The first step in the preparation of Census Tracts is to Join tract file with Census Data from 2010 ASC persons with disabilities data 2012. Also, it is necessary to Select by Attribute all non-residential areas from the Land Cover Shapefile 2016 and Export it as a new file with Residential Tracts only. Thereafter, Arc tool Erase allows to delete all non-residential areas from the census tract file. Remaining parts contain information about the population and show only residential blocks. This step is mostly important for further analysis to calculate the affected population. The new tracts are limited to residential houses only. In case of analysis of entire census tracts, many non-residential areas would be included providing the information about population while this area actually has no residential block and must be excluded from population analysis.</p>
                </li>

                <li>
                    Street Network
                    <p>The first step of this part of analysis was to create Address Locator  based on a Centerline Street Layer of Philadelphia. The Address Locator helps to define the physical location of a feature taking the information about ZIP code, street name and house number. For the address type it is to recommend to select dual range since it is one of the most commonly used types of address definition for US. This is optimized for address geocoding based on street name, house number and zip code.  As result new network system appears containing information about the location of addresses and driving directions as well as connecting points and turn possibilities. Based on this network system it is possible to the geocode the addresses for all eight Health Center locations in Philadelphia area. This process was performed with ArcGIS tool Geocode Address. As result of this step new layer Health Centers was created, and multiple locations have been added to the map (Figure 1).</p>
                </li>

                <li>
                    Hospitals and Health Centers
                    <p>The third step of the present analysis is the construction of an unified vector layer containing information about all hospitals and health centers in Philadelphia. To achieve this target it is necessary first to extract philadelphian hospitals from the Pennsylvania Hospitals File using Clip and save as a new layer. Thereafter, it is possible to united new hospitals file with the previously created health centers layer using the tool Merge. The result is a new shapefile containing all features and their attributes from the two mentioned before, hospitals and public health centers. However, it is to recommend to take look into the attribute table. It is common that layers created by different institutions are not similar in table structure and field names. To avoid all issues related to field names in further process, the new layer should be modified manually using Arc tool Editor. Most important is, to Add New Field ‘Location Name’ (Text) to the Attribute Table and insert hospitals and health center names with Field Calculator into this column.</p>
                </li>

                <li>
                    Access Areas Model
                    <p>The next stage in this analysis is to create three different access areas around every Health Center and Hospital based on Philadelphia’s street network. For this purpose Network Analyst provides another very useful function New Service Area.  To achieve the desired result in service area construction, it is required to set the distance of all areas. Additionally, it is to mention that it is possible to change the borders of service area between overlapping, separated or dissolved. In this case all service area have been constructed as overlapped. The distances of the three access areas have been assigned as 100, 250 and 500 meters. Comparison of these areas should allow a better overview how close is the access to a health facility from the next public transportation stop. Which also means how long would be the distance that a person with physical disability must overcome to arrive at medical center from the nearest bus or train stop. Since three access areas are required to achieve the target of present stage, the tool which creates a New Service Area new access area should be run for three time. All environments should remain same except the area distance.  After the implementation of Service Area too, the result appears in a new layer block Service Area 1, 2 and 3 showing different features related to perform analysis. However, for current research only the three constructed area are of an interest. Therefore, it is necessary to Export all three constructed areas as new shapefiles and add them to map canvas. An appropriate definition of Transparency for each access area allows to examine the features under the overlayed area files.</p>
                </li>

                <li>
                    Access Area Analysis
                    <p>After the creation of different access areas for every medical facility, the next consecutive stage is the access area analysis and comparison. Before starting the actual spatial analysis, it is necessary to edit the attribute table of each access area layer by adding new fields: Bus Access, Train Access, Wheelchair Accessible Stations,  The most common method during this stage is the tool Select by Location. It allows to define all features of an target layer (100 m Access Area) which contain a source layer feature (Train Stations). However, in order to make the attribute table available for this type of analysis, it is necessary to edit it first. For each category tested on intersection with the access area, new field should be added (Train Stations).  Select by Location allows to mark all access areas which contain a train station. This selection may be seen in the Attribute Table and appears highlighted. Now, it is necessary to select Field Calculator for the new column Train Stations and assign the value “Y” (yes, access to train station within 100 meters). This value will be added to those features only that have been selected in previous step.  In the next step it is necessary to Switch Selection. Now, all access areas without train stations within 100 meters became highlighted. The useage of Field Calculator for Train Stations column allows to assign “N” (no access within 100 meters) to these selected areas. Finally, 100 Meter Access Area Layer gets a new attribute providing the information about train station access within 100 meters. All steps, described above should be repeated multiple times to add fields bus access and  wheelchair accessible train station.  After the complementation of 100 meters access area modification, it is necessary to apply these steps to the 250 and 500 meters access area layers. After all three access area layer have been modified, and contain information about the access to train station and bus stops, it is possible open the Attribute Table of each layer and export it as text file. This allows to create a comparison table in microsoft excel.</p>
                </li>

                <li>
                    Construction of 1 Kilometer Service Area
                    <p>The process of service area construction is very similar to the previously described access area creation in fourth stage of present research. However, at this point it is necessary to create 1-Kilometer service area around every Health Center and Hospital based on Philadelphia’s street network. For this purpose Network Analyst provides another very useful function New Service Area.  To achieve the desired result in service area construction, it is required to set the length of the area (1 Km), and direction towards the facility. Like in previous stage where Network Analysis has been used, all service areas should overlap, since it remains unclear which of the facilities people would prefer to go to living within equal distance to multiple locations. The only fact needs to be mentioned at this point is the purpose of this area. The present 1 kilometer service area should not provide the information about the access to bus stops or train stations but to show the socio-demographical characteristics of adjusted population.</p>
                </li>

                <li>
                    Service Area Analysis
                    <p>The last stage in present analysis was to collect demographical characteristics about the population living within the 1-kilometer service area of each Health Center and Hospital (Medical Center, MC) in Philadelphia. For this project the most interesting information is percent of persons with ambulatory difficulty (physical disabilities) for each census tract located within an MC service area. However, only those tracts should be included that have their geographic centroid in an MC service area, and 100 % residential area.  One of the most appropriate ways to achieve the desired result, is to use ArcGIS tool Select by Location. The selection method should be Select Feature from Residential Blocks (Target Layer) having their centroid in the source layer (Service Area) feature. After the implementation only required tracts were selected, and could be saved as a new shapefile using Data – Export Data tool as Tracts_within_SA. Now, having only those tracts with centroid within a MC service area, it is possible to analyze the demographic characteristics of population living within each area. Therefore it is recommended to run module Join Data again. This time it is necessary to join data to Service Area from another layer (Tracts_within_SA) based on spatial location. All data (attributes) of Tracts_within_SA should be summarized by Average. After this step, the layer Service Area will contain summarized information about the percentage of persons with ambulatory difficulty from Tracts_within_SA. Each service area will have an average rate shown in percent of total service area population.</p>
                </li>

                </ol>

                </p>
            </section>
            <hr>
            <section class="text-document">
                <h2>Discussion</h2>
                <p>The result of present analysis showed that only 1 of 75 tested medical centers does not have a direct access to any kind of public transportation within 500 meters. However, the reason for this result may be an inaccurate address geocoding or not precise information about the location of the hospital. The actual location may also vary from the assigned administrative address for couple hundred meters.

                    Generally, all medical centers located close to center city or in old urban neighborhoods, are well connected to public transportation. Healths centers and hospitals in more suburban areas of Philadelphia usually have no direct access to train stations.

                    The average disability rate for all service areas is approximately 7.9%.  Most of these areas are located in North and Lower Northeast Philadelphia providing an access to bus and access to wheelchair accessible station within 500 meters in 30% of all cases. Although, service areas with percent people with disabilities under the average could be detected spread out the entire city, only those located in suburbs have an access to train station with elevator.

                    A closer look at the distribution of persons with physical disabilities across Philadelphia shows that the highest rate can be found in the North, North-West and Lower North-East neighborhoods of the town. Those boroughs also provide the highest density of hospitals. The lowest number of hospital could be found in Upper Northeast Philadelphia. Even the average percentage of persons with physical disabilities is under 8%, it is possible that many of these persons need to travel long distances for a medical center services.

                    Generally, modernization of subway and train stations with the target to provide access for people in a wheelchair is always welcome, and a good sign of the governmental care about the local population, however, it is a high cost, long term process. Such a renovation of stations and elevator or ramp installation requires a detailed area analysis to make the final decision which of the stations  should be rebuild first. Philadelphia’s public railroad system may not provide a very convenient access to every medical center. However, SEPTA makes a great effort to providing citywide paratransit service for people with disabilities and senior citizens. This type of public transportation services collect its passengers on request at any location within SEPTA’s operating system borders, even in places where no regular bus services are available.   </p>
            </section>
        </div>

    </div>
</div>

</body>
<script src="{{ asset('assets/da/js/jquery-2.1.0.min.js') }}"></script>
<script src="{{ asset('assets/da/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/da/js/leaflet.js') }}"></script>
<script src="{{ asset('assets/da/js/data.js') }}"></script>
<script src="{{ asset('assets/da/js/map.js') }}"></script>
</html>
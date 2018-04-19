<?php
include("header.php");
?>
<script>
  $("body").removeClass("bg-green-ish").addClass("body-rosu");
  $("nav").removeClass("bg-navbar").addClass("navbar-rosu");
  $(".nav-link").addClass("nav-link-rosu");
</script>
<!-- Engine -->
<div class="container">
    <div class="row">
        <div class="col s12">
            <div id="accordion">
              <div class="card bg-engines">
                <div class="card-header text-center">
                  <h5 class="mb-0 bg-darker-gradient">
                    <button class="btn btn-link btn-engine text-white text-capitalyze" data-toggle="collapse" data-target="#engine" aria-expanded="true" aria-controls="engine">
                        <b><span class="marime-font-titluri" style="color: #522410">Engines</span></b>
                    </button>
                  </h5>
                </div>
                <div id="engine" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="color: #522410">
                    <span class="text-sunny margin-jos-title bg-darker-gradient-padding"><b>
                    Amerikon Speedsystems - Gromlen - Medion - Transtek
                    </b></span>
                        <p />
                        <p><span>
                        The AmerikonSS/Gromlen/Medion engines are all about delivering the middle of the road power output. Think of this as a Ram Air Intake upgrade, which increases engine power in the lower-mid range. It's usually muscle cars such as a Dodge Viper SRT10 or its full-size relative, the Dodge Charger SRT-8, that benefit from this engine, but it will also work for exotic cars like the Ford GT and the SLR McLaren.
                        </span></p><br />

                    <span class="text-primary margin-jos-title bg-darker-gradient-padding"><b>
                    Dawndraft - Kestrel - Velocicom - Zero Tuning Mods
                    </b></span>
                        <p />
                        <p><span>
                        Considered to be the best engine you can get in Need for Speed: World, the Dawndraft/Kestrel/Velocicom engine is a high-torque powerplant designed to pack quite a punch, allowing for quicker acceleration. What this would be suitable for is a low-RPM car, i.e. many of the classic muscle cars in the game (Chevelle SS especially), or in a real-life application, a high-torque AMG Mercedes.
                        </span></p><br />

                    <span class="text-danger margin-jos-title bg-darker-gradient-padding"><b>
                    Nova-T - Richter - Ventura - Attack Motorsports
                    </b></span>
                        <p />
                        <p><span>
                        The Nova-T/Richter/Ventura engine, considered to be the worst brand for power parts according to the NFSW community, is the lighter version of AmerikonSS/Gromlen/Medion. The difference between the two is that this is NOT designed for V8 engines; rather they’re more Inline oriented (Supra, Lancer Evolution and others of this nature). This is a must for every turbocharged engine, as too much horsepower will kill the car's torque, and too much torque will hold it back from its true potential.
                        </span></p><br />

                    <span class="text-success margin-jos-title bg-darker-gradient-padding"><b>
                    Omnia Racegruppe - Norset - Ursa Motorsport - SpeedSciens
                    </b></span>
                        <p />
                        <p><span>
                        Often noted as being the "bugged" engine, the collection of engines from Omina Racegruppe/Norset/Ursa Motorsport are made for those high revving automobiles. This engine is tuned to provide high end hp with pretty bad low end torque, requiring an induction 9 times out of 10 to help out. Do note that this should be used only on cars with the peak near the high range (Nissan Skyline GT-R), rather than cars that still have quite a ways to go between their peak power and redline (Mazda RX-7).
                        </span></p>
                  </div>
                </div>
              </div>
              <div class="card bg-forced-inductions">
                <div class="card-header text-center">
                  <h5 class="mb-0 bg-darker-gradient">
                    <button class="btn btn-link btn-forced-induction text-white text-capitalyze" data-toggle="collapse" data-target="#forcedi" aria-expanded="true" aria-controls="forcedi">
                      <b><span class="marime-font-titluri" style="color: #93d1ff">Forced Inductions</span></b>
                    </button>
                  </h5>
                </div>
                <div id="forcedi" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="color: #93d1ff">
                    <span class="text-sunny margin-jos-title bg-darker-gradient-padding"><b>
                    Amerikon Speedsystems - Gromlen - Medion - Transtek
                    </b></span>
                        <p />
                        <p><span>
                        Somewhere in your life you've heard and/or read about a big blower in a muscle car. Such is the case here, as the Gold Induction delivers raw power widespread across the RPM ranges in engines that are more HP-oreinted (Exige Cup 260, Shelby GT500 SS to name a few). It improves both acceleration and top speed, although it has a bit of a bias toward the horsepower side of things. It takes a while to make power, but the boost is massive once it does.
                        </span></p><br />

                    <span class="text-primary margin-jos-title bg-darker-gradient-padding"><b>
                    Dawndraft - Kestrel - Velocicom - Zero Tuning Mods
                    </b></span>
                        <p />
                        <p><span>
                        The “other” favorite among the community is the Dawndraft/Kestrel/Velocicom Induction. This is more or less the inverse of the Gold, tuned for better response at low-RPM. What this means is that it has smaller components and as a result is capable of making more power quicker than the Golf. The drawback with this induction, however, is that you get less power up top. This is suitable for torquier engines, namely those of classic muscle cars.
                        </span></p><br />

                    <span class="text-danger margin-jos-title bg-darker-gradient-padding"><b>
                    Nova-T - Richter - Ventura - Attack Motorsports
                    </b></span>
                        <p />
                        <p><span>
                        As weak as this turbo may seem, the Nova-T/Richter/Ventura Induction is, in actuality, not made to be strong. It is a turbo system that actually spools quickly up to speed, compromising top end boost in the process. This turbo is optional to install, but if you were to install one, it is best applicalbe to high-RPM cars, the Murcielago LP640 and the Porsche 911 GT3 RS being prime examples.
                        </span></p><br />

                    <span class="text-success margin-jos-title bg-darker-gradient-padding"><b>
                    Omnia Racegruppe - Norset - Ursa Motorsport - SpeedSciens
                    </b></span>
                        <p />
                        <p><span>
                        Screaming like a banshee, the Green turbo delivers sheer power at high-RPM and is thus the perfect brand for many turbocharged and/or naturally-aspirated cars like the RX-7 or the Corvette Z06 (yes, the Z06 carries a turbo, not a supercharger). It takes much longer to spool up than the Red, but it does deliver more boost once it reaches the top. Usually, the more peaky the engine, the more Boost it would need, but DO NOT apply this to a Green Engine as the car would die off in the lower range.
                        </span></p>
                  </div>
                </div>
              </div>
              <div class="card bg-transmissions">
                <div class="card-header text-center">
                  <h5 class="mb-0 bg-darker-gradient">
                    <button class="btn btn-link btn-transmissions text-white text-capitalyze" data-toggle="collapse" data-target="#transmissions" aria-expanded="true" aria-controls="transmissions">
                      <b><span class="marime-font-titluri" style="color: #ff8a87">Transmissions</span></b>
                    </button>
                  </h5>
                </div>
                <div id="transmissions" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="color: #ff8a87">
                    <span class="text-sunny margin-jos-title bg-darker-gradient-padding"><b>
                    Amerikon Speedsystems - Gromlen - Medion - Transtek
                    </b></span>
                        <p />
                        <p><span>
                        This transmission contains a balanced set of gears and is suitable for anything equipped with either a Gold engine or a Gold Transmission. It is also slightly heavier so the handling may or may not (this is based on the layout of the car) take a hit.
                        </span></p><br />

                    <span class="text-primary margin-jos-title bg-darker-gradient-padding"><b>
                    Dawndraft - Kestrel - Velocicom - Zero Tuning Mods
                    </b></span>
                        <p />
                        <p><span>
                        Need a drivetrain to keep your high-horsepower machine in top form? Look no further than the blue transmission. Featuring a higher final drive ratio and shorter gears, this transmission is made with the pure intent of making your high-RPM racer a top contender.
                        </span></p><br />

                    <span class="text-danger margin-jos-title bg-darker-gradient-padding"><b>
                    Nova-T - Richter - Ventura - Attack Motorsports
                    </b></span>
                        <p />
                        <p><span>
                        As per usual, the red drivetrain is the lightweight version of its rivals, AmerikonSS/Gromlen/Medion. Like the yellow, the red features balanced gears to manage the moderate power increases from the other power parts; however, in contrast, the red also features extra handling via the increase of rigidity, settling down cars that are known to be tail-happy a la Mitsubishi Lancer Evolution IX.
                        </span></p><br />

                    <span class="text-success margin-jos-title bg-darker-gradient-padding"><b>
                    Omnia Racegruppe - Norset - Ursa Motorsport - SpeedSciens
                    </b></span>
                        <p />
                        <p><span>
                        In order to take advantage of a car’s great low-RPM torque, longer gears must be used, and this is where this green transmission comes in. This drivetrain features extra-long gears, longer than those found in both the Medion and Ventura setups. Best used on an aforementioned low-RPM car, such as the Nissan GT-R and the Volkswagen Scirocco, this transmission allows the car to use its powerful low revs to its advantage in the straights, as well as a huge improvement in top speed.
                        </span></p>
                  </div>
                </div>
              </div>
              <div class="card bg-suspensions">
                <div class="card-header text-center">
                  <h5 class="mb-0 bg-darker-gradient">
                    <button class="btn btn-link btn-suspensions text-white text-capitalyze" data-toggle="collapse" data-target="#suspensions" aria-expanded="true" aria-controls="suspensions">
                      <b><span class="marime-font-titluri" style="color: #47e67c">Suspensions</span></b>
                    </button>
                  </h5>
                </div>
                <div id="suspensions" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="color: #47e67c">
                    <span class="text-sunny margin-jos-title bg-darker-gradient-padding"><b>
                    Amerikon Speedsystems - Gromlen - Medion - Transtek
                    </b></span>
                        <p />
                        <p><span>
                        This suspension is set to a soft setting. The resulting behavior is better traction and stability off road and on highways but understeer in turns and cause the car to jump higher on any smooth hills. The car will feel more stable going over tiny bumps such as apex’s and sidewalks and will loose less speed from collisions. Cars that would benefit from this suspension are muscle cars, which, in World, are well known for having either no stability, no traction, or having neither.
                        </span></p><br />

                    <span class="text-primary margin-jos-title bg-darker-gradient-padding"><b>
                    Dawndraft - Kestrel - Velocicom - Zero Tuning Mods
                    </b></span>
                        <p />
                        <p><span>
                        Designed for drag and rally cars, this suspension semi-stiffens the car, reducing body roll and helping the car accelerate, but in turn causing turning oversteer from. Cars that would benefit from this are front-heavy all-wheel-drive cars which are known to, according to the physics of World, have a lot of understeer and at times even have trouble accelerating.
                        </span></p><br />

                    <span class="text-danger margin-jos-title bg-darker-gradient-padding"><b>
                    Nova-T - Richter - Ventura - Attack Motorsports
                    </b></span>
                        <p />
                        <p><span>
                        Possibly the best suspension in the bracket, this stiffens up the car, thereby provoking more oversteer and delivering a crisper turn-in. Works well with many cars, whether they be drifters or have a hard time cornering. Note: This should be used only with rear-wheel drive as all-wheel drive cars don’t respond well to this as they would the blue suspension.
                        </span></p><br />

                    <span class="text-success margin-jos-title bg-darker-gradient-padding"><b>
                    Omnia Racegruppe - Norset - Ursa Motorsport - SpeedSciens
                    </b></span>
                        <p />
                        <p><span>
                        As with the Yellow suspension, the Green suspension has a semi-soft tuned setup, though in contrast, it provides a great deal of stability as the car gains speed and is therefore an exceptional choice for a highway-tuned car. However, as Omnia/Norset/Ursa Motorsport fails in the handling department, be prepared to face major understeer.
                        </span></p>
                  </div>
                </div>
              </div>
              <div class="card bg-brakes">
                <div class="card-header text-center">
                  <h5 class="mb-0 bg-darker-gradient">
                    <button class="btn btn-link btn-brakes text-white text-capitalyze" data-toggle="collapse" data-target="#brakes" aria-expanded="true" aria-controls="brakes">
                      <b><span class="marime-font-titluri" style="color: #381f00">Brakes</span></b>
                    </button>
                  </h5>
                </div>
                <div id="brakes" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="color: #381f00">
                    <span class="text-sunny margin-jos-title bg-darker-gradient-padding"><b>
                    Amerikon Speedsystems - Gromlen - Medion - Transtek
                    </b></span>
                        <p />
                        <p><span>
                        A set of front and rear brakes tuned for a slight front bias. If no car you own seems to fit the Ventura brakes, you can go for these.
                        </span></p><br />

                    <span class="text-primary margin-jos-title bg-darker-gradient-padding"><b>
                    Dawndraft - Kestrel - Velocicom - Zero Tuning Mods
                    </b></span>
                        <p />
                        <p><span>
                        A set of unbiased front and rear brakes with the purpose of quicker deceleration. These brakes do increase the risk of understeer due to the fact that they are very powerful and will lock your tires up, requiring earlier braking.
                        </span></p><br />

                    <span class="text-danger margin-jos-title bg-darker-gradient-padding"><b>
                    Nova-T - Richter - Ventura - Attack Motorsports
                    </b></span>
                        <p />
                        <p><span>
                        A set of front and rear brakes tuned to have the rear lock up slightly before the front. Causes braking oversteer and makes the car’s rear more likely to slide. Best used on rear-wheel-drive cars with drift tunings as well as known track cars like the Elise.
                        </span></p><br />

                    <span class="text-success margin-jos-title bg-darker-gradient-padding"><b>
                    Omnia Racegruppe - Norset - Ursa Motorsport - SpeedSciens
                    </b></span>
                        <p />
                        <p><span>
                        A set of unbiased front and rear brakes tuned kinda loosely. This was done to provide stable braking at high speeds(avoid locking up). The downfall is that the brakes have to be applied a bit earlier coming into a turn. These brakes should be paired up with Medion tires as the grip should slow you down.
                        </span></p>
                  </div>
                </div>
              </div>
              <div class="card bg-tires">
                <div class="card-header text-center">
                  <h5 class="mb-0 bg-darker-gradient">
                    <button class="btn btn-link btn-tires text-white text-capitalyze" data-toggle="collapse" data-target="#tires" aria-expanded="true" aria-controls="tires">
                      <b><span class="marime-font-titluri" style="color: #20002c">Tires</span></b>
                    </button>
                  </h5>
                </div>
                <div id="tires" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="color: #20002c">
                    <span class="text-sunny margin-jos-title bg-darker-gradient-padding"><b>
                    Amerikon Speedsystems - Gromlen - Medion - Transtek
                    </b></span>
                        <p />
                        <p><span>
                        These tires improve the handling of a car all across the board by boosting grip by a considerable margin. By doing this, your car gets improved traction and improved stability and is recommended for any car that lacks in both fields. You do get some mild understeer, but it doesn’t make much of a difference to be considered car-breaking.
                        </span></p><br />

                    <span class="text-primary margin-jos-title bg-darker-gradient-padding"><b>
                    Dawndraft - Kestrel - Velocicom - Zero Tuning Mods
                    </b></span>
                        <p />
                        <p><span>
                        These are a set of tires that boost acceleration considerably by increasing traction. Their tendency to cause moderate oversteer, however, should be noted (although at times, if you know how, you can force power oversteer).
                        </span></p><br />

                    <span class="text-danger margin-jos-title bg-darker-gradient-padding"><b>
                    Nova-T - Richter - Ventura - Attack Motorsports
                    </b></span>
                        <p />
                        <p><span>
                        Designed for drifting, Nova-T/Richter/Ventura tires are perfect for known driftable cars (i.e. RX-7, 240SX, 350Z, 370Z, Silvia S15, AE86, etc.) as they help the car slide out in turns, basically the same function brakes with a rear bias have. These are also useful for track cars; however, as with the suspension of the same brand, this should be left to rear-wheel-drive vehicles.
                        </span></p><br />

                    <span class="text-success margin-jos-title bg-darker-gradient-padding"><b>
                    Omnia Racegruppe - Norset - Ursa Motorsport - SpeedSciens
                    </b></span>
                        <p />
                        <p><span>
                        These are a set of tires that benefit cars that rule on the highways. While the stat increases don’t tell you, they increase stability at high speeds, so in a way, these tires improve top speed. As with the blue tires, however, this causes turning understeer and, as a result, require precision turning from the driver.
                        </span></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>
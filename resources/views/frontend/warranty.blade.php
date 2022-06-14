@extends('frontend.layouts.master')
@section('title','Sigma')
@section('content')
<Section class="qbits-top-middle">
    <div class="container">
        <div class="middle-qbits-menu">
            <div class="row">
                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-start">
                        <a>Drivers & Manuals</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-center">
                        <a href="{{ route('product_registration')}}">Registration</a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-center" style="margin-left: 60px;">
                        <a href="{{route('warranty')}}">Warranty</a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-end">
                        <a>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>

<section class="warrenty-area-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="warrenty-section">
                    <p style="margin-top: 60px;">Qbits provides support and services including repair and replacement based on the warranty policy. Upon purchase of the Qbits laptop, customers are provided with its original limited warranty. As per Qbits warranty policy, the date is issued from the day of purchase from the authorized dealer. The customer will get the services for the device or parts/components that are covered by the warranty policy. The service is provided only after being verified by contacting Qbits service centers and authorized service providers.</p>

                    <p>For Qbits Warranty Service, the customer shall be responsible to carry a valid warranty card along with the original invoice or sales slip indicating the date of purchase, dealer's name, model, and serial no. of the product. </p>

                    <h3>Qbits warranty terms and policies in brief</h3>
                    <p>1. Qbits service centers and authorized service providers provide immediate service for any component or hardware product that manifests a defect or imperfection in craftsmanship during the Limited Warranty Period. </p>
                    <p>2. Qbits service centers and authorized service providers offer warranty service for all the products subject to the terms and conditions set forth in this Limited Warranty. The Limited Warranty Period starts on the date of purchase from the Qbits website / authorized seller / dealers / distributor.</p>
                    <p>3. The support and services are provided by the Qbits service centers and authorized service providers only after verifying and proving that the product is still under warranty.</p>
                    <p>4. The device or parts/component shall be repaired only if they are under coverage mentioned in the warranty card.</p>
                    <p>5. Qbits Warranty policy only covers any defect in any parts/components that are being used to manufacture the product.</p>
                    <p>6. The customer will get the services at no cost only if the warranty is found valid and the device is purchased from Qbits website / authorized seller / dealers / distributor, provided warranty card along with original invoice or sales slip.</p>
                    <p>7. Qbits warranty service, provided by Qbits service centers and authorized service providers, will not be responsible for any defect or damage caused by accidents, drops, spills, floods, fires, or other natural disasters. The product will be considered excluded from the warranty policy and can be repaired only on a chargeable basis directly through the service center.    </p>
                    <p>8. No claim shall be considered liable or Qbits shall not be responsible for any kind of losses or damages, records, information or data, or economic consequential damages including lost profits due to hardware and software failure, directly or indirectly. </p>
                    <p>9. The customers are expected to backup their data, for any loss of data  during the repair process, Qbits Servicing Center will not be responsible for any loss of data. </p>
                    <p>10. If the product is repaired by any unauthorized service center, the warranty will be void and Qbits service centers and authorized service providers shall not be liable for reimbursements, claims, and damages that may result from the unauthorized repair of the product. </p>
                    <p>11. Qbits reserves the right to refuse a warranty if the original serial number or authentic information is removed, obliterated, altered, or changed from the original purchase of the product from the dealer.</p>
                    <h3>Limitations</h3>
                    <p>1. Qbits warranty does not cover any defect arising from incorrect installation, damage due to non-recommended softwares, in this case, it will be considered as Customer Induced Damage and the defect will be treated as out of warranty coverage.</p>
                    <p>2. The warranty will be treated as invalid if any information, data, name,  or seal the serial number that has been damaged or rendered, altered, or changed.</p>
                    <p>3. Qbits warranty does not cover any defect or damage caused by improper handling/usage or any disassembly by end-user or non-authorized repair centers.</p>
                    <p>4. Qbits Warranty will be invalid for any kind of damage due to inconsistent voltage or improper power supply.</p>
                    <p>5. Qbits Warranty invalid if the damage is caused by accident, misuse, liquid spills, abuse, contamination, improper or inadequate maintenance.</p>
                    <p>6. For the display modules, Qbits service centers and authorized service providers will not be liable if there are scratches or defects due to external causes.</p>
                    <p>7. Qbits service centers and authorized service providers are not responsible for damage or loss in transit.</p>
                    <h3>Warranty Policy for Laptops:</h3>
                    <a href="#">Click here to download a detailed warranty policy for laptops.</a>

                </div>
            </div>
        </div>
    </div>
</section>


<script>
   

</script> 
 
@endsection




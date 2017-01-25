<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Piedmont Risk Mitigation</title>

  <!-- Materialize -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">


  <!-- Vue -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script type="text/javascript">
     (function(){
        emailjs.init("user_N1UdEHYZXDjGhHQLf3lhv");
     })();
  </script>

</head>

<!-- <body onload=(Materialize.toast('Thank you for contacting us!', 4000))> -->
<body class="container">

<nav  class="top-nav orange custom-1">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo center title-header card-panel blue custom-1 container">Piedmont Risk Mitigation</a>
  </div>
</nav>

<main class="content">

    <!--intro Text-->
    <div class="row">
      <div class="col s12">
        <br>
        <div class="row center section-header">HIPAA/HITECH Compliance Services</div>
        <span class="border"></span>
        <p class="section-text">Protecting the data that has been entrusted to you is an important and difficult task.  This task is exponentially more complex when your business maintains electronic health information.  Potential malicious entities, security oversight, or even neglect can trigger a breach event and cost your business significantly in direct fines and loss of revenue.  The Health Insurance Portability and Accountability Act (HIPAA) was passed by Congress in 1996 and outlines generally accepted standards for safeguarding your systems and data.  In 2009, the Health Information Technology for Economic and Clinical Health Act (HITECH) expanded who falls under the HIPAA / HITECH auspices and greatly increased the potential penalties facing any organization that is not compliant.
        <p class="section-text"> HIPAA and HITECH standards can be overwhelming for an organization to properly implement and align.  We can help!  Piedmont Risk Mitigation provides HIPAA / HITECH compliance assessments and alignment.  We understand the complex requirements and can provide a path to compliance that simultaneously will protect your customer information and limit your potential breach and audit liability.
        <br>
        <br>
        <div class="row center section-header">Work With Us</div>
        <p><span class="border"></span>
        <p class="section-text">We are an excellent fit for organizations sized between 5 and 50 employees that are looking for a trusted partner with their best interests in mind.  If you gather, receive, or store Protected Health Information, then you are considered to be a "Covered Entity" under HIPAA / HITECH.  Let us assess your alignment with the multitude of requirements and help you establish some peace of mind about your organization’s potential breach and audit liability.

        <!-- Modal Trigger -->
        <!-- Use nobutton class to hide the button -->
        <div class="row center">
          <a class="btn-large waves-effect waves-light modal-trigger grey darken-3 center-align tooltipped" href="#modal1" data-position="right" data-delay="50" data-tooltip="Great Decision!">Contact us</a>
        </div>
      </div>
    </div>

    <!--Promotion table top-->
    <div class="row">
      <div class="col s4">
        <div class="center card-panel">
          <i class="large material-icons material-icons-promo">input</i>
          <p class="flow-text">Risk Assessment</p>
          <p class="light center">Comprehensive assessment of the mandated administrative, physical, and technical safeguards.</p>
        </div>
      </div>

      <div class="col s4">
        <div class="center card-panel">
          <i class="large material-icons material-icons-promo">assignment</i>
          <p class="flow-text">Comprehensive Reporting</p>
          <p class="light center">Complete reporting of your organization’s misalignments and level of risk.</p>
        </div>
      </div>

      <div class="col s4">
        <div class="center card-panel">
          <i class="large material-icons material-icons-promo">thumb_up</i>
          <p class="flow-text">Remediation Strategy</p>
          <p class="light center">Detailed remediation plans based on the assessment findings to bring your organization into alignment.</p>
        </div>
      </div>
    </div>
    <!-- End top promotion table -->


    <!-- Modal Structure -->
    <div id="modal1" class="modal center">
      <div class="modal-content">
        <h4>Let us know</h4>
          <form class="col s12" id="emailInfo" method="POST">
          <!-- Form Input-->
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input name="con_name" id="con_name" type="text" class="validate">
              <label for="con_name">Your Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">business</i>
              <input name="bus_name" id="bus_name" type="text" class="validate">
              <label for="bus_name">Business Name</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input name="phone" id="phone" type="text" class="validate">
              <label for="phone">Phone Number</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input name="email" id="email" type="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <input type="hidden" name="_next" value="//piedmontmitigation.com/submitted.php" />
          <input type="hidden" name="_subject" value="Website contact" />
          <input type="text" name="_gotcha" style="display:none" />
          <input type="submit" value="Send" class=" modal-action modal-close waves-effect waves-green btn-flat">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
        </form>
        <script>
            var emailInfo = document.getElementById('emailInfo');
            emailInfo.setAttribute('action', '//formspree.io/' + 'prm' + '@' + 'piedmontmitigation' + '.' + 'com');
        </script>
      </div>
    </div>
</main>


  <footer class="orange custom-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Us</h5>
          <p class="grey-text text-lighten-4">Piedmont Risk Mitigation is located in Baltimore, Maryland and focuses on information technology compliance for medical, legal, and other HIPAA / HITECH covered entities. </p>
          <p class="grey-text text-lighten-4">© 2016 Piedmont Risk Mitigation</p>
        </div>

        <div class="col l6 s12  blue custom-1 card-panel center">
          <h5 class="white-text">&nbsp;Have Some Questions?</h5>
          <p class="grey-text text-lighten-4">Let us know! Feel free to reach out to us anytime.</p>
          <a class="btn waves-effect waves-light grey darken-3" target="_blank" href="mailto:prm@piedmontmitigation.com"><i class="material-icons right">mail</i> Email</a>
          <p>&nbsp;</p>
        </div>


      <div class="footer-copyright">

      </div>
    </div>


  </footer>
</div>

<script>
$(document).ready(function() {
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
  $('.tooltipped').tooltip({delay: 50});
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


</body>
</html>

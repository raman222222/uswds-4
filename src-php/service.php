<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services - RFPMart + USWDS</title>
    <meta name="description" content="Services served by RPFMart." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

<main class="usa-section usa-section--light">
  <div class="grid-container">
    <h1 class="usa-heading-xl">Our Services</h1>

    <p>We provide a range of services to meet your needs. Each service is designed with quality and accessibility in mind.</p>

    <section class="grid-row grid-gap">
      <!-- Service 1 -->
      <div class="grid-col-sm-6 grid-col-md-4">
        <div class="usa-card">
          <header class="usa-card__header">
            <h2 class="usa-heading-md">Consulting</h2>
          </header>
          <div class="usa-card__body">
            <p>Expert guidance to optimize your workflow and improve efficiency.</p>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="grid-col-sm-6 grid-col-md-4">
        <div class="usa-card">
          <header class="usa-card__header">
            <h2 class="usa-heading-md">Development</h2>
          </header>
          <div class="usa-card__body">
            <p>Custom web and software solutions built to your specifications.</p>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="grid-col-sm-6 grid-col-md-4">
        <div class="usa-card">
          <header class="usa-card__header">
            <h2 class="usa-heading-md">Support</h2>
          </header>
          <div class="usa-card__body">
            <p>Reliable technical support and maintenance for your systems.</p>
          </div>
        </div>
      </div>

    </section>
  </div>
</main>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>

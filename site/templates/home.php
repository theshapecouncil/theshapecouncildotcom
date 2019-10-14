<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. 
 * This home template renders content from others pages, the children of the `photography` page to display a nice gallery grid.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

<main>
    <section class="workshops">
      <header class="grid-header">
        <h2>Workshops</h2>
        <h3>Let's make something together.</h3>
      </header>
      <div class="card-container">
        <figure class="card">
          <a
            href="https://checkout.square.site/buy/QAAX2M4WSCFAA2HMNMFUUMTU"
          ></a>
          <img
            src="images/Cards2.jpg"
            alt="Join Hannah Theiss at The Shape Council for a 2 hour greeting card block printmaking workshop."
          />
          <figcaption>
            <strong class="yellow">Greeting Card Block Printing</strong>
            <div class="date-time">
              <span>Thursday, October 17</span>
              <span class="symbol">&#9670;</span>
              <span>6:30 PM</span>
            </div>
            <span class="price">$50</span>
          </figcaption>
          <div class="event-description">
            <p>
              Join Hannah Theiss at The Shape Council for a 2 hour greeting card
              block printmaking workshop.
            </p>
          </div>
        </figure>
        <figure class="card">
          <a
            href="https://checkout.square.site/buy/RSLHTMN72GXPYHHZP3QQKU3Y"
          ></a>
          <img src="images/Cards1.jpg" alt="A picture of greeting cards." />
          <figcaption>
            <strong class="yellow">Greeting Card Block Printing</strong>
            <div class="date-time">
              <span>Thursday, October 24</span>
              <span class="symbol">&#9670;</span>
              <span>6:30 PM</span>
            </div>
            <span class="price">$50</span>
          </figcaption>
          <div class="event-description">
            <p>
              Join Hannah Theiss at The Shape Council for a 2 hour greeting card
              block printmaking workshop.
            </p>
          </div>
        </figure>
        <figure class="card">
          <a
            href="https://checkout.square.site/buy/44N46GYHVQ7BQY2KFHQYEBX5"
          ></a>
          <img src="images/tote4.jpg" alt="A picture of a tote bag" />
          <figcaption>
            <strong class="yellow">Tote Bag Pattern Printmaking</strong>
            <div class="date-time">
              <span>Sunday, October 20</span>
              <span class="symbol">&#9670;</span>
              <span>2:00 PM</span>
            </div>
            <span class="price">$75</span>
          </figcaption>
          <div class="event-description">
            <p>
              Join Hannah Theiss at The Shape Council for a 2 hour tote bag
              block printmaking workshop.
            </p>
          </div>
        </figure>
        <figure class="card">
          <a
            href="https://checkout.square.site/buy/SSZEMYEYVQTO4UQEZMJPPUF2"
          ></a>
          <img
            src="images/2ColorLinocut.jpg"
            alt="A picture of a lino cut print"
          />
          <figcaption>
            <strong class="yellow">Two Color Linocut Printmaking</strong>
            <div class="date-time">
              <span>Sunday, October 26</span>
              <span class="symbol">&#9670;</span>
              <span>2:00 PM</span>
            </div>
            <span class="price">$75</span>
          </figcaption>
          <div class="event-description">
            <p>
              Join Hannah Theiss at The Shape Council for a 3 hour linocut
              printmaking workshop.
            </p>
          </div>
        </figure>
        <figure class="card">
          <a
            href="https://checkout.square.site/buy/JP7DMKVLSOFMOXN3J2IS3SEM"
          ></a>
          <img src="images/Centerpiece.jpg" alt="event alt text" />
          <figcaption>
            <strong class="yellow"
              >You Light Up My Life Mini-Habitat Centerpiece</strong
            >
            <div class="date-time">
              <span>Tuesday, October 29</span>
              <span class="symbol">&#9670;</span>
              <span>6:30 PM</span>
            </div>
            <span class="price">$50</span>
          </figcaption>
          <div class="event-description">
            <p>
              Join me, Weina from Poppy & Finch, learn how to create
              one-of-a-kind mini-habitat centerpiece using PNW native plants in
              a repurposed vintage lamp globe.
            </p>
          </div>
        </figure>
      </div>
    </section>
    <section class="hours">
      <header>
        <h2>Hours</h2>
      </header>
      <p>Wednesdays 1-6</p>
      <p>Thursdays 11-7</p>
      <p>Fridays 11-7</p>
      <p>First & Third Saturdays 10-3</p>
      <span class="sub-head yellow">Or whenever the door is open.</span>
    </section>
</main>
<?php snippet('footer') ?>

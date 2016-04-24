
<div class="fb-modal-content">
  <div class="modal-title">
    <h4>capture_<span class="country-name highlighted"></span> - <span class="country-title"></span></h4>
    <a href="#" class="js-close-modal"><svg class="icon icon--close"><use xlink:href="#icon--close"/></svg></a>
  </div>

  <form class="fb-form country-capture-form">
    <input name="level_id" type="hidden" value="">
    <textarea rows="4" class="capture-text" disabled></textarea>
    </br>
    <div class="capture-links"></div>
    </br>
    <fieldset class="form-set">
      <div class="answer_no_bases form-el el--text">
        <input placeholder="Insert your answer" name="answer" type="text" autocomplete="off">
      </div>
    </fieldset>
    <div class="form-el--multiple-actions fb-column-container">
      <div class="col col-1-2">
          <!-- 
          * ALTERNATE HOVERS
          *
          * To enable a link that has different content on hover, add a
          *  "data-hover" addribute to the <a> tag and wrap the default
          *  text in a span. On hover, the browser will hide the default
          *  text and show the value of the data-hover attribute
        -->
        <a class="fb-cta cta--blue js-trigger-hint"><span>Request Hint</span></a>
      </div>
      <div class="answer_no_bases col col-1-2 actions--right">
        <a class="fb-cta cta--yellow js-trigger-score">Submit</a>
      </div>
    </div>
  </form>

    <div class="capture-hints-and-help">
      <div class="capture-hint">
        <h4>hint_</h4>
        <div></div>
      </div>
    </div>

        <footer class="modal-footer fb-column-container">
          <div class="col col-1-2 country-capture-stats fb-column-container">
            <div class="points-display">
              <span class="points-number fb-numbers"></span>
              <span class="points-label">PTS</span>
            </div>
            <div class="country-stats">
              <dl>
                <dt>type</dt>
                <dd class="country-type"></dd>

                <dt>category</dt>
                <dd class="country-category"></dd>

                <dt>first_capture</dt>
                <dd class="opponent-name country-owner"></dd>
              </dl>
            </div>
          </div>
          <div class="col col-1-2 country-capture-completed fb-column-container">
            <span>completed_by &gt;</span>
            <ul class="completed-list"></ul>
          </div>
        </footer>

      </div>
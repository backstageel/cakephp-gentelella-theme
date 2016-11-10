<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Form advanced</h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <!-- form input mask -->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Input Mask</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form class="form-horizontal form-label-left">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Date Mask</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone mask</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Custom Mask</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask': '99-999999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Serial Number</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">TaxID Mask</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '99-99999999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Credit Card Mask</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
            </div>
            <div class="ln_solid"></div>

            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- /form input mask -->

    <!-- form color picker -->
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Color Picker</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form class="form-horizontal form-label-left">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="demo1 form-control" value="#5367ce" />
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="input-group demo2">
                  <input type="text" value="#e01ab5" class="form-control" />
                  <span class="input-group-addon"><i></i></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Horizontal bar</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control demo colorpicker-element" data-horizontal="true" id="demo_forceformat" value="#8fff00">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Vertical bar</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control demo colorpicker-element" id="demo_forceformat3" value="#8fff00">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Inline picker</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="well">
                  <div id="demo_cont" class="demo demo-auto inl-bl colorpicker-element" data-container="#demo_cont" data-color="rgba(150,216,62,0.55)" data-inline="true"></div>
                  <div class="demo demo-auto inl-bl colorpicker-element" data-container="true" data-color="rgb(50,216,62)" data-inline="true" style="margin-left:20px;"></div>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- /form color picker -->

    <!-- form input knob -->
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Input knob</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-2">
            <p>Display value</p>
            <input class="knob" data-width="100" data-height="120" data-min="-100" data-displayPrevious=true data-fgColor="#26B99A" value="44">
          </div>
          <div class="col-md-2">
            <p>&#215; 'cursor' mode</p>
            <input class="knob" data-width="100" data-height="120" data-cursor=true data-fgColor="#34495E" value="29">
          </div>
          <div class="col-md-2">
            <p>Step 0.1</p>
            <input class="knob" data-width="100" data-height="120" data-min="-10000" data-displayPrevious=true data-fgColor="#26B99A" data-max="10000" data-step=".1" value="0">
          </div>
          <div class="col-md-2">
            <p>Angle arc</p>
            <input class="knob" data-width="100" data-height="120" data-angleOffset=-125 data-angleArc=250 data-fgColor="#34495E" data-rotation="anticlockwise" value="35">
          </div>
          <div class="col-md-2">
            <p>Alternate design</p>
            <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="75">
          </div>
          <div class="col-md-2">
            <p>Angle offset</p>
            <input class="knob" data-width="100" data-height="120" data-angleOffset=90 data-linecap=round data-fgColor="#26B99A" value="35">
          </div>
        </div>
      </div>
    </div>
    <!-- /form input knob -->

  </div>




  <div class="row">
    <div class="col-md-12">

      <!-- form date pickers -->
      <div class="x_panel" style="">
        <div class="x_title">
          <h2>Date Pickers <small> Available with multiple designs</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">


          <div class="well" style="overflow: auto">
            <div class="col-md-4">
              <div id="reportrange_right" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
              </div>
            </div>
            <div class="col-md-4">
              <p>Date Range Picker with opening to right and left</p>
            </div>
            <div class="col-md-4">
              <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
              </div>
            </div>
          </div>


          <div class="well">

            <form class="form-horizontal">
              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="input-prepend input-group">
                      <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                      <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="03/18/2013 - 03/23/2013" />
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>



          </div>
          <div class="row">

            <div class="col-md-3">
              <div class="daterangepicker xdisplay picker_1 single opensright show-calendar">
                <div class="calendar first single right" style="display: block;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="calendar second left" style="display: none;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="ranges" style="display: none;">
                  <div class="range_inputs">
                    <div class="daterangepicker_start_input">
                      <label for="daterangepicker_start">From</label>
                      <input id="daterangepicker_start" class="input-mini" type="text" name="daterangepicker_start" value="">
                    </div>
                    <div class="daterangepicker_end_input">
                      <label for="daterangepicker_end">To</label>
                      <input id="daterangepicker_end" class="input-mini" type="text" name="daterangepicker_end" value="">
                    </div>
                    <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                    <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
                  </div>
                </div>
              </div>


              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>

            </div>

            <div class="col-md-3">
              <div class="daterangepicker xdisplay picker_2 single opensright show-calendar">
                <div class="calendar first single right" style="display: block;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="calendar second left" style="display: none;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="ranges" style="display: none;">
                  <div class="range_inputs">
                    <div class="daterangepicker_start_input">
                      <label for="daterangepicker_start3">From</label>
                      <input id="daterangepicker_start3" class="input-mini" type="text" name="daterangepicker_start" value="">
                    </div>
                    <div class="daterangepicker_end_input">
                      <label for="daterangepicker_end3">To</label>
                      <input id="daterangepicker_end3" class="input-mini" type="text" name="daterangepicker_end" value="">
                    </div>
                    <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                    <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
                  </div>
                </div>
              </div>


              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div class="col-md-3">
              <div class="daterangepicker picker_3 xdisplay single opensright show-calendar">
                <div class="calendar first single right" style="display: block;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="calendar second left" style="display: none;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="ranges" style="display: none;">
                  <div class="range_inputs">
                    <div class="daterangepicker_start_input">
                      <label for="daterangepicker_start2">From</label>
                      <input id="daterangepicker_start2" class="input-mini" type="text" name="daterangepicker_start" value="">
                    </div>
                    <div class="daterangepicker_end_input">
                      <label for="daterangepicker_end2">To</label>
                      <input id="daterangepicker_end2" class="input-mini" type="text" name="daterangepicker_end" value="">
                    </div>
                    <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                    <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
                  </div>
                </div>
              </div>

              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div class="col-md-3">
              <div class="daterangepicker picker_4 xdisplay single opensright show-calendar">
                <div class="calendar first single right" style="display: block;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="calendar second left" style="display: none;">
                  <div class="calendar-date">
                    <table class="table-condensed">
                      <thead>
                      <tr>
                        <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                        </th>
                        <th colspan="5" class="month">Mar 2013</th>
                        <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                        </th>
                      </tr>
                      <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="available off" data-title="r0c0">24</td>
                        <td class="available off" data-title="r0c1">25</td>
                        <td class="available off" data-title="r0c2">26</td>
                        <td class="available off" data-title="r0c3">27</td>
                        <td class="available off" data-title="r0c4">28</td>
                        <td class="available" data-title="r0c5">1</td>
                        <td class="available" data-title="r0c6">2</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r1c0">3</td>
                        <td class="available" data-title="r1c1">4</td>
                        <td class="available" data-title="r1c2">5</td>
                        <td class="available" data-title="r1c3">6</td>
                        <td class="available" data-title="r1c4">7</td>
                        <td class="available" data-title="r1c5">8</td>
                        <td class="available" data-title="r1c6">9</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r2c0">10</td>
                        <td class="available" data-title="r2c1">11</td>
                        <td class="available" data-title="r2c2">12</td>
                        <td class="available" data-title="r2c3">13</td>
                        <td class="available" data-title="r2c4">14</td>
                        <td class="available" data-title="r2c5">15</td>
                        <td class="available" data-title="r2c6">16</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r3c0">17</td>
                        <td class="available active start-date end-date" data-title="r3c1">18</td>
                        <td class="available" data-title="r3c2">19</td>
                        <td class="available" data-title="r3c3">20</td>
                        <td class="available" data-title="r3c4">21</td>
                        <td class="available" data-title="r3c5">22</td>
                        <td class="available" data-title="r3c6">23</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r4c0">24</td>
                        <td class="available" data-title="r4c1">25</td>
                        <td class="available" data-title="r4c2">26</td>
                        <td class="available" data-title="r4c3">27</td>
                        <td class="available" data-title="r4c4">28</td>
                        <td class="available" data-title="r4c5">29</td>
                        <td class="available" data-title="r4c6">30</td>
                      </tr>
                      <tr>
                        <td class="available" data-title="r5c0">31</td>
                        <td class="available off" data-title="r5c1">1</td>
                        <td class="available off" data-title="r5c2">2</td>
                        <td class="available off" data-title="r5c3">3</td>
                        <td class="available off" data-title="r5c4">4</td>
                        <td class="available off" data-title="r5c5">5</td>
                        <td class="available off" data-title="r5c6">6</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="ranges" style="display: none;">
                  <div class="range_inputs">
                    <div class="daterangepicker_start_input">
                      <label for="daterangepicker_start">From</label>
                      <input class="input-mini" type="text" name="daterangepicker_start" value="">
                    </div>
                    <div class="daterangepicker_end_input">
                      <label for="daterangepicker_end">To</label>
                      <input class="input-mini" type="text" name="daterangepicker_end" value="">
                    </div>
                    <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                    <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
                  </div>
                </div>
              </div>


              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>

        </div>
      </div>
      <!-- /form datepicker -->


      <!-- form grid slider -->
      <div class="x_panel" style="">
        <div class="x_title">
          <h2>Grid Slider</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row grid_slider">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Default grid slider with min and max values</p>
              <input type="text" id="range" value="" name="range" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Grid with slider labels are far away outside it's container</p>
              <input type="text" id="range_25" value="" name="range" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Grid with labels inside container using force_edges attribute</p>
              <input type="text" id="range_27" value="" name="range" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Create Grid with pre-defined steps</p>
              <input type="text" id="range_26" value="" name="range" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Prevent one from dragging the labels</p>
              <input type="text" id="range_31" value="" name="range" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Grid with minimum and maximum values</p>
              <input type="text" class="range_min_max" value="" name="range" />
            </div>
            <div>
              <p>Grid With time in 24 hour format</p>
              <input type="text" class="range_time24" value="" name="range" />
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
      <!-- /form grid slider -->

      <!-- image cropping -->
      <div class="container cropper">
        <div class="row">
          <div class="col-md-9">
            <!-- <h3 class="page-header">Demo:</h3> -->
            <div class="img-container">
              <img id="image" src="images/picture2.jpg" alt="Picture">
            </div>
          </div>
          <div class="col-md-3">
            <!-- <h3 class="page-header">Preview:</h3> -->
            <div class="docs-preview clearfix">
              <div class="img-preview preview-lg"></div>
              <div class="img-preview preview-md"></div>
              <div class="img-preview preview-sm"></div>
              <div class="img-preview preview-xs"></div>
            </div>

            <!-- <h3 class="page-header">Data:</h3> -->
            <div class="docs-data">
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataX">X</label>
                <input type="text" class="form-control" id="dataX" placeholder="x">
                <span class="input-group-addon">px</span>
              </div>
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataY">Y</label>
                <input type="text" class="form-control" id="dataY" placeholder="y">
                <span class="input-group-addon">px</span>
              </div>
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataWidth">Width</label>
                <input type="text" class="form-control" id="dataWidth" placeholder="width">
                <span class="input-group-addon">px</span>
              </div>
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataHeight">Height</label>
                <input type="text" class="form-control" id="dataHeight" placeholder="height">
                <span class="input-group-addon">px</span>
              </div>
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataRotate">Rotate</label>
                <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                <span class="input-group-addon">deg</span>
              </div>
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
              </div>
              <div class="input-group input-group-sm">
                <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9 docs-buttons">
            <!-- <h3 class="page-header">Toolbar:</h3> -->
            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                            <span class="fa fa-arrows"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                            <span class="fa fa-crop"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                            <span class="fa fa-search-plus"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                            <span class="fa fa-search-minus"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
                            <span class="fa fa-arrow-left"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
                            <span class="fa fa-arrow-right"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
                            <span class="fa fa-arrow-up"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
                            <span class="fa fa-arrow-down"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                            <span class="fa fa-rotate-left"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                            <span class="fa fa-rotate-right"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
                            <span class="fa fa-arrows-h"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)">
                            <span class="fa fa-arrows-v"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                            <span class="fa fa-check"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                            <span class="fa fa-remove"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                            <span class="fa fa-lock"></span>
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                            <span class="fa fa-unlock"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                            <span class="fa fa-refresh"></span>
                          </span>
              </button>
              <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                            <span class="fa fa-upload"></span>
                          </span>
              </label>
              <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                            <span class="fa fa-power-off"></span>
                          </span>
              </button>
            </div>

            <div class="btn-group btn-group-crop">
              <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                            Get Cropped Canvas
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                            160&times;90
                          </span>
              </button>
              <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                            320&times;180
                          </span>
              </button>
            </div>

            <!-- Show the cropped image in modal -->
            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                  </div>
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
                  </div>
                </div>
              </div>
            </div><!-- /.modal -->

            <button type="button" class="btn btn-primary" data-method="getData" data-option data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                          Get Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
                          Set Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="getContainerData" data-option data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
                          Get Container Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="getImageData" data-option data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                          Get Image Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
                          Get Canvas Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
                          Set Canvas Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
                          Get Crop Box Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                          Set Crop Box Data
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                          0,0
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                          100%
                        </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
                        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                          180°
                        </span>
            </button>
            <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
          </div><!-- /.docs-buttons -->

          <div class="col-md-3 docs-toggles">
            <!-- <h3 class="page-header">Toggles:</h3> -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                            16:9
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                            4:3
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                            1:1
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                            2:3
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                            Free
                          </span>
              </label>
            </div>

            <div class="btn-group btn-group-justified" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                            VM0
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                            VM1
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                            VM2
                          </span>
              </label>
              <label class="btn btn-primary">
                <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                            VM3
                          </span>
              </label>
            </div>

            <div class="dropdown dropup docs-options">
              <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                Toggle Options
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="responsive" checked>
                    responsive
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="restore" checked>
                    restore
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="checkCrossOrigin" checked>
                    checkCrossOrigin
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="checkOrientation" checked>
                    checkOrientation
                  </label>
                </li>

                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="modal" checked>
                    modal
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="guides" checked>
                    guides
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="center" checked>
                    center
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="highlight" checked>
                    highlight
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="background" checked>
                    background
                  </label>
                </li>

                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="autoCrop" checked>
                    autoCrop
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="movable" checked>
                    movable
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="rotatable" checked>
                    rotatable
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="scalable" checked>
                    scalable
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="zoomable" checked>
                    zoomable
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="zoomOnTouch" checked>
                    zoomOnTouch
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="zoomOnWheel" checked>
                    zoomOnWheel
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="cropBoxMovable" checked>
                    cropBoxMovable
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="cropBoxResizable" checked>
                    cropBoxResizable
                  </label>
                </li>
                <li role="presentation">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                    toggleDragModeOnDblclick
                  </label>
                </li>
              </ul>
            </div><!-- /.dropdown -->

            <a class="btn btn-default btn-block" data-toggle="tooltip" href="https://fengyuanchen.github.io/cropperjs" title="Cropper without jQuery">Cropper.js</a>

          </div><!-- /.docs-toggles -->
        </div>
      </div>
      <!-- /image cropping -->
    </div>
  </div>
</div>
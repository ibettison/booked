<?php
/* Smarty version 3.1.30, created on 2019-12-16 14:51:03
  from "C:\wamp64\www\booked\lang\en_us\help.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df799d7164bf6_88004084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a007aaeb9d32f14affc072d60272da32257043' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\lang\\en_us\\help.tpl',
      1 => 1568839842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5df799d7164bf6_88004084 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>"https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.css"), 0, false);
?>



<div id="page-help">

    <div class="row">
        <div id="toc-div" class="col-sm-3 hidden-xs scrollspy">
            <nav id="toc" role="navigation" data-spy="affix" style="overflow-y: scroll;max-height:80%">
            </nav>
        </div>

        <div id="help" class="col-xs-12 col-sm-9">
            <h1><?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
 Help</h1>

            <div id="help-registration">

                <h2>Registration</h2>

                <p>
                    Registration is required in order to use <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
. After your
                    account
                    has been registered
                    you will be able to log in and access any resources that you have permission to.
                </p>

            </div>

            <div id="help-booking">

                <h2>Booking</h2>

                <p>
                    Under the Schedule menu item you will find the Bookings item. This will show you the available, reserved and
                    blocked slots on the schedule and allow you to book
                    resources that you have permission to.
                </p>

                <p>
                    On the Bookings page, find the resource, date and time you'd like to book. Clicking on the time slot will allow
                    you change the details of the reservation. Clicking the
                    Create button will check availability, book the reservation and send out any emails. You will be given a
                    reference number to use for reservation follow-up.
                </p>

                <p>Any changes made to a reservation will not take effect until you save the reservation.</p>

                <p>By default, only Application Administrators can create reservations in the past.</p>

            </div>

            <div id="help-find-a-time">
                <h3>Find A Time</h3>
                <p>
                    Under Schedule there is an option to Find A Time. This gives you the ability to search for any available slot
                    that meets your criteria.
                </p>

            </div>

            <div id="help-multiple-resources">

                <h3>Multiple Resources</h3>

                <p>You can book all resources that you have permission as part of a single reservation. To add more resources to
                    your reservation, click the More Resources link, displayed next to the name of the primary resource you are
                    reserving. You will then able to add more resources by selecting them and clicking the Done button.</p>

                <p>To remove additional resources from your reservation, click the More Resources link, deselect the resources you
                    want to remove, and click the Done button.</p>

                <p>Additional resources will be subject to the same rules as primary resources. For example, this means that if you
                    attempt to create a 2 hour reservation with Resource 1, which has a maximum length of 3 hours and with Resource
                    2, which
                    has a maximum length of 1 hour, your reservation will be denied.</p>

                <p>You can view the configuration details of a resource by hovering over the resource name.</p>

            </div>

            <div id="help-recurring-dates">

                <h3>Recurring Dates</h3>

                <p>A reservation can be configured to recur a number of different ways.</p>

                <p>The repeat options allow for flexible recurrence possibilities. For example: Repeat Daily every 2 days will
                    create a reservation every other day for your specified time. Repeat Weekly, every 1 week on Monday, Wednesday,
                    Friday will create a reservation on each of those days every week at your specified time. If you were creating a
                    reservation on 2011-01-15, repeating Monthly, every 3 months on the day of month would create a reservation
                    every third month on the 15th. Since 2011-01-15 is the third Saturday of January, the same example with the day
                    of week selected would repeat every third month on the third Saturday of that month.</p>

            </div>

            <div id="help-additional-participants">

                <h3>Additional Participants</h3>

                <p>You can either Add Participants or Invite Others when booking a reservation. Adding someone will include them on
                    the reservation and will not send an invitation.
                    The added user will receive an email.</p>
                <p>Inviting a user will send an invitation email and give the user an option
                    to Accept or Decline the invitation. Accepting an
                    invitation adds the user to the participants list. Declining an invitation removes the user from the invitees
                    list.
                </p>

                <p>
                    The total number of participants is limited by the resource's participant capacity.
                </p>

            </div>

            <div id="help-accessories">

                <h3>Accessories</h3>

                <p>Accessories can be thought of as objects used during a reservation. Examples may be projectors or chairs. To add
                    accessories to your reservation, click the Add link to the right of the Accessories title. From there you will
                    be able to select a quantity for each of the available accessories. The quantity available during your
                    reservation time will depend on how many accessories are already reserved.</p>

            </div>

            <div id="help-admin-booking">

                <h3>Booking on behalf of others</h3>

                <p>Application Administrators and Group Administrators can book reservations on behalf of other users by clicking
                    the Change link to the right of the user's name.</p>

                <p>Application Administrators and Group Administrators can also modify and delete reservations owned by other
                    users.</p>

            </div>

            <div id="help-reservation-updates">

                <h2>Updating a Reservation</h2>

                <p>You can update any reservation that you have created or that was created on your behalf.</p>

            </div>

            <div id="help-reservation-updates-instance">

                <h3 data-toc-text="Specific Instances">Updating Specific Instances From a Series</h3>

                <p>
                    If a reservation is set up to repeat, then a series is created. After you make changes and Update the
                    reservation, you will be asked which instances of the series you want to apply the changes to. You can
                    apply your changes to the instance that you are viewing (Only This Instance) and no other instances will be
                    changed.
                    You can update All Instances to apply the change to every reservation instance that has not yet occurred. You
                    can also apply the change only to Future Instances, which will update all reservation instances including and
                    after the instance you are currently viewing.
                </p>

                <p>Only Application Administrators can update reservations in the past.</p>

            </div>

            <div id="help-reservation-delete">

                <h2>Deleting a Reservation</h2>

                <p>Deleting a reservation completely removes it from the schedule. It will no longer be visible anywhere in
                    <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
</p>

                <h3 data-toc-text="Specific Instances">Deleting Specific Instances From a Series</h3>

                <p>Similar to updating a reservation, when deleting you can select which instances you want to delete.</p>

                <p>Only Application Administrators can delete reservations in the past.</p>

            </div>

            <div id="help-email-notifications">

                <h2>Email Notifications</h2>
                <p>
                    can send you email notifications for different events. You can turn notifications on or off
                    in My Account > Notification Preferences.
                </p>

            </div>

            <div id="help-credits">

                <h2>Credits</h2>

                <p>Credits give administrators control over resource usage. A resource may be configured to consume a certain number of
                    credits per slot. If you don't have enough credits, you will not be allowed to complete a booking. You can view your
                    credit usage in the Credits section of My Account</p>

                <h2>Paying for Reservation Usage</h2>
                <p>Reservations can be paid for using credits. If you do not have enough credits to complete a reservation, you can purchase credits in the Credits section of My
                    Account. You can also view your purchase history and credit usage history in the Credits section of My Account.</p>

                <h2 data-toc-text="Add to Calendar">Adding a Reservation to Calendar (Outlook&reg;, iCal, Mozilla
                    Lightning,
                    Evolution)</h2>

                <p>When viewing or updating a reservation you will see a button to Add to Outlook. If Outlook is installed on your
                    computer then you should be asked to add the meeting. If it is not installed you will be prompted to download an
                    .ics file. This is a standard calendar format. You can use this file to add the reservation to any application
                    that supports the iCalendar file format.</p>

            </div>

            <div id="help-subscriptions">

                <h2>Subscribing to Calendars</h2>

                <p>You can easily display
<?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>

events in external calendars like Microsoft Outlook and Google Calendar.
To do this, you subscribe to calendars.</p>

                <p>Calendars can be published for Schedules, Resources and Users. For this feature to work, the administrator must
                    have
                    configured a subscription key in the config file. To enable Schedule and Resource level calendar
                    subscriptions, simply allow public visibility when managing the Schedule or Resource. To turn on personal calendar
                    subscriptions, open Schedule > My Calendar. On the right side of the page you will find a link to Allow or Turn
                    Off calendar subscriptions.
                </p>

                <p> To subscribe to a Schedule calendar, open Schedule > Resource Calendar and select the schedule you want. On the
                    right side of the page, you will find a link to subscribe to the current calendar. Subscribing the a Resource
                    calendar follows the same steps.</p>
                <p>To subscribe to your personal calendar, open Schedule > My Calendar. On the
                    right side of the page, you will find a link to subscribe to the current calendar.</p>

                <p>By default events for the next 30 will be returned. This can be customized with the
                    following two query string parameters on the subscription URL. pastDayCount and futureDayCount will override the
                    past and future number of days loaded, respectively.</p>

            </div>

            <div id="help-calendar-client">
                <h3 data-toc-text="Calendar Client">Calendar client (Outlook, iCal, Mozilla Lightning,
                    Evolution)</h3>

                <p>In most cases, simply clicking the Subscribe to this Calendar link will automatically set up the subscription in
                    your calendar Client. For Outlook, if it does not automatically add, open the Calendar view, then right click My
                    Calendars and choose
                    Add Calendar > From Internet. Paste in the URL printed under the Subscribe to this Calendar link.</p>

                <div id="help-google-calendar">
                <h3>Google Calendar</h3>

                <p>Open Google Calendar settings. Click the Calendars tab. Click Browse interesting calendars. Click add by URL.
                    Paste
                    in the URL printed under the Subscribe to this Calendar link.</p>

                </div>

                <div id="help-embed-calendar">
                <h3>Embedding a Calendar Externally</h3>
                <p class="note">This requires CORS to be enabled on your server. You can add the following to your
                    Apache htaccess file <code>Header Set Access-Control-Allow-Origin "*"</code></p>
                <p>It is simple to include a view of a Booked calendar in an external website. Copy and paste the
                    following
                    JavaScript
                    reference to your website
                    <code>
                        &lt;script async src=&quot;<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/scripts/embed-calendar.js&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
                    </code>
                </p>

                <p>The following querystring arguments are accepted to customize the embedded view:</p>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Possible Values</th>
                        <th>Default</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>type</td>
                        <td>agenda, week, month</td>
                        <td>agenda</td>
                        <td>Controls the view that is shown</td>
                    </tr>
                    <tr>
                        <td>format</td>
                        <td>date, title, user, resource</td>
                        <td>date</td>
                        <td>Controls the information shown in the reservation box. Multiple options can be passed. For
                            example, to show date and title request date,title
                        </td>
                    </tr>
                    <tr>
                        <td>d</td>
                        <td>Any digit between 1 and 30</td>
                        <td>7</td>
                        <td>Limits the number of days shown for the agenda view</td>
                    </tr>
                    <tr>
                        <td>sid</td>
                        <td>Any schedule public ID</td>
                        <td>All schedules</td>
                        <td>Limits the reservations shown to a specific schedule</td>
                    </tr>
                    <tr>
                        <td>rid</td>
                        <td>Any resource public ID</td>
                        <td>All resources</td>
                        <td>Limits the reservations shown to a specific resource</td>
                    </tr>
                    </tbody>
                </table>

                <p><strong>Only calendars and resources that have been marked as public will be shown.</strong> If
                    reservations
                    are missing from a schedule or resource, it is likely that public visibility has not been turned on.
                </p>
                </div>
            </div>

            <div id="help-quotas">

                <h2>Quotas</h2>

                <p>Administrators have the ability to configure quota rules based on a variety of criteria. If your reservation
                    would violate any quota, you will be notified and the reservation will be denied.</p>

                <h2>Waiting For Availability</h2>

                <p>If a time is not available you can sign up to be notified if it becomes available. This option will be shown
                    after a reservation attempt is made.</p>
            </div>

        </div>
    </div>
    <?php echo '<script'; ?>
 src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            var navSelector = '#toc';
            var $myNav = $(navSelector);
            Toc.init({
                $nav: $myNav,
                $scope: $('#help')
            });

            $('body').scrollspy({
                target: navSelector,
                offset: 50
            });
        });
    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

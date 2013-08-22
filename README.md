## installation
Normal civicrm extension, download, enable, enjoy

If your civicrm version is < 4.4, you will have to apply the patch that allows you to have a hook needed to alter the api call that records the bounce

$patch -p1 < patch/4.3.5.txt

## What problem does it solve?
When you send a mailing, civimail processes the bounces and act accordingly. In practice, it means to either flag the email as invalid and put it on hold, or wait to get a bit more bounced emails before doing so, and update the stats.

As you don't see that there is a "soft bounce", you won't know the contact email have failed until it bounces several times and that it becomes a "hard bounce" that records it.

Once there is a hard bounce (or enough soft bounces), you see that a contact is on hold email, but you don't know when it happened, and you can't see the detail of the bounced message(s) that put it on hold, nor since how long it's the case.

That's unfortunate, as it's message often contains interesting information to help you correct the email (eg. the email of the new person to contact, information about the new domain name to use...).

This extension, on the top of all the nice things done by default by Civi, saves the bounce as an activity on the contact. 

## Evolutions, todo
It would be nice if the bounce activity could automatically be assigned to a person in the team responsible to try to fix the invalid emails, or at least send them and alert. Something to support better the workflow needed to keep your contact database in good shape. 

It would be even nicer if you write this improvement and submit a patch (or pull requests on github, as the cool kids do)...

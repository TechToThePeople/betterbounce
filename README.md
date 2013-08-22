## installation
Normal civicrm extension, download, enable, enjoy

## What problem does it solve?
When you send a mailing, civimail processes the bounces and act accordingly. In practice, it means to either flag the email as invalid and put it on hold, or wait to get a bit more bounced emails before doing so, and update the stats.

The problem is that if you see a contact with a on hold email, you don't know when it happened, and you can't see the detail of the bounced message that put it on hold.

That's unfortunate, as it's message often contains interesting information to help you correct the email (eg. the email of the new person to contact, information about the new domain name to use...).

This extension, on the top of all the nice things done by default, saves the bounce as an activity on the contact. 

## Evolutions, todo
It would be nice if the bounce activity could automatically be assigned to a person in the team responsible to try to fix the invalid emails, or at least send them and alert. 

It would be even nicer if you write this improvement and submit a patch (or pull requests on github, as the cool kids do)...

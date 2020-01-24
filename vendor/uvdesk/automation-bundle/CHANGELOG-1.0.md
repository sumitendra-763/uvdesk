CHANGELOG for 1.0.x
===================

This changelog references any relevant changes introduced in 1.0 minor versions.

* 1.0.3 (2019-11-15)
    * **Misc. Updates:**
        * Included Github issue templates
        * Updated composer dependencies & set minimum required php version to 7.2

* 1.0.2 (2019-10-23)
    * **Issue #24:** Enable customer/agent to reset password from single route
    * **Misc. Updates:**
        * Updated workflow fixtures following deprecated events from uvdesk/core-framework
        * Added patch to support previously configured workflows with deprecated events from dependent package uvdesk/core-framework (agent.forgot_password, customer.forgot_password)
        * Updated README.md with link to the official gitter chat for uvdesk/automation-bundle

* 1.0.0 (Released on 2019-10-09)
    * **Issue #22:** Uncaught exception on the prepared responses page (raised by KlaasT)
    * **Issue #21:** Uncaught exception on the prepared responses page (raised by piyushwebkul)
    * **Issue #20:** automation items search added (raised by vaishaliwebkul)
    * **Issue #18:** entity compatibility updates (raised by shubhwebkul)
    * **Issue #10:** Remove delete ticket action from the automated workflow  (raised by vaishaliwebkul)
    * **Issue #11:** Default Workflow provided as "ticket created" need to be update (raised by vaishaliwebkul)
    * **Issue #16:** Update Email Template mention in ticket create workflow (raised by vaishaliwebkul)
    * **Issue #17:** Ticket created workflow, changes in fixture. (raised by papnoisanjeev)
    * **Issue #15:** prepared response list user image missing resolve (raised by papnoisanjeev)
    * **Issue #14:**  workflow listener changes for getting collaborator mails  (raised by papnoisanjeev)
    * **Issue #13:** workflow set action when customer create ticket. (raised by papnoisanjeev)
    * **Issue #12:** Trim search bar value in prepared response. (raised by papnoisanjeev)
    * **Issue #9:** Agent privileges update (raised by shubhwebkul)
    * **Issue #3:** If select any "action" in workflow, get error (raised by vaishaliwebkul)
    * **Issue #8:** Default Workflow Updates (raised by shubhwebkul)
    * **Issue #7:** Issue resolved (raised by shubhwebkul)
    * **Issue #6:** workflow conditions dropdown issue resolve. (raised by papnoisanjeev)
    * **Issue #5:** Added event in prepared response.yaml (raised by papnoisanjeev)
    * **Issue #4:** event added in workflow.yaml for fetching workflow actions (raised by papnoisanjeev)
    * **Issue #2:** get the full name of customer form user entity in workflow listener (raised by papnoisanjeev)
    * **Issue #1:** workflow listner with prepared response method added (raised by papnoisanjeev)

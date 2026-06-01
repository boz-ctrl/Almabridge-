# Credential Lifecycle

AlmaBridge credentials should be governed across their full lifecycle.

## Lifecycle States

| State | Meaning |
|---|---|
| Draft | Credential has been prepared but not issued |
| Issued | Credential has been issued to the learner |
| Active | Credential is valid and verifiable |
| Suspended | Credential is temporarily not valid pending review |
| Revoked | Credential has been permanently withdrawn |
| Expired | Credential validity period has ended |
| Renewed | Credential has been replaced or extended |

## Lifecycle Events

The system should log:

- Credential creation
- Credential issue
- Credential verification
- Credential suspension
- Credential reinstatement
- Credential revocation
- Credential expiry
- Credential renewal
- Credential data correction

## Revocation Governance

Revocation should not be treated as a simple delete action. A proper revocation workflow should record:

- Who revoked the credential
- Why it was revoked
- When the decision was made
- Whether the learner was notified
- Whether the issuer has evidence for the decision
- Whether the credential can be appealed or reissued

## Verification Behaviour

Public verification should show the current lifecycle status. A revoked, suspended or expired credential should not appear as valid.

## Commercial Assurance Extension

AlmaBridge Assurance should extend this basic lifecycle with controlled approvals, regulator visibility, evidence packs, appeal workflow, multi-party audit trails and policy-based revocation controls.

# Roles and Permissions

AlmaBridge should use custom roles and capabilities rather than relying only on default WordPress roles.

## Core Roles

| Role | Purpose |
|---|---|
| Learner | Owns credentials and shares verification proofs |
| Issuer | Issues credentials on behalf of an institution or provider |
| Employer / Verifier | Verifies credentials and checks trust signals |
| Government / Regulator | Reviews issuer trust, audit evidence and assurance data |
| Platform Admin | Manages configuration, roles and governance settings |

## Learner

Learners should be able to:

- View their credentials
- Access verification links or QR codes
- Share credentials with third parties
- See credential status
- Request correction where supported

## Issuer

Issuers should be able to:

- Create credentials
- Issue credentials
- View issued credentials
- Manage status within permitted limits
- Revoke or suspend credentials where authorised
- View their credit balance where the Pro credit model is enabled

## Verifier

Verifiers should be able to:

- Check public credential status
- View issuer and credential trust signals
- Confirm whether a credential is active, revoked, suspended or expired

## Regulator

Regulator access is generally a commercial Assurance feature. It may include:

- Read-only issuer visibility
- Credential status oversight
- Audit evidence access
- Accreditation metadata
- Jurisdiction and scope tagging
- Assurance reporting

## Platform Admin

Platform admins should be able to:

- Configure AlmaBridge
- Manage users and roles
- Configure issuer settings
- Manage credential templates
- Review audit logs
- Configure verification settings
- Maintain security settings

## Access Control Principle

Every sensitive action should check both authentication and capability. Public verification should expose only the minimum information needed to validate the credential.

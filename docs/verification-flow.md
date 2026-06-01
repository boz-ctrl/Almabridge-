# Verification Flow

The verification flow allows a third party to check whether a credential is authentic, current and issued by a recognised issuer.

## Basic Community Flow

1. Learner shares a verification URL or QR code.
2. Verifier opens the public verification page.
3. AlmaBridge checks the credential ID or claim code.
4. The system retrieves the credential record.
5. The system checks status: active, suspended, revoked or expired.
6. The system displays verification result and issuer details.
7. The verification attempt may be recorded in the audit log.

## Verification Result Should Include

- Credential title
- Issuer name
- Learner display name or privacy-preserving learner identifier
- Issue date
- Expiry date, where applicable
- Current credential status
- Blockchain reference, where configured
- Verification timestamp

## Trust Signals

Community Edition may show basic trust signals:

- Issuer name
- Credential status
- Issue date
- Expiry date
- Blockchain reference

Commercial Assurance editions may add:

- Verified issuer status
- Accreditation metadata
- Jurisdiction tag
- Regulator or awarding body scope
- Assurance level
- Revocation governance status
- Audit evidence export

## Privacy Note

Public verification should avoid exposing unnecessary personal information. Where appropriate, learner identity should be confirmed through a privacy-preserving claim code, hash or consent-based disclosure process.

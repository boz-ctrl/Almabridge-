# Data Model

This document describes the core credential data concepts for AlmaBridge Community Edition.

## Credential

A credential represents an issued learning, skills, qualification, achievement or professional evidence record.

Recommended fields:

| Field | Purpose |
|---|---|
| `credential_id` | Internal unique identifier |
| `claim_code` | Public or semi-public verification code |
| `title` | Credential title |
| `description` | Short credential description |
| `issuer_id` | Issuing organisation identifier |
| `learner_id` | Learner or recipient identifier |
| `issued_at` | Date and time of issue |
| `expires_at` | Expiry date, where applicable |
| `status` | Credential lifecycle status |
| `evidence_url` | Optional evidence reference |
| `solana_mint_address` | Optional Solana mint address |
| `solana_transaction_signature` | Optional Solana transaction reference |
| `created_at` | Record creation time |
| `updated_at` | Last update time |

## Issuer

An issuer is an organisation authorised to issue credentials.

Recommended fields:

| Field | Purpose |
|---|---|
| `issuer_id` | Unique issuer identifier |
| `issuer_name` | Public issuer name |
| `issuer_type` | University, college, training provider, employer, awarding body, regulator, other |
| `website` | Issuer website |
| `jurisdiction` | Country or regulatory jurisdiction |
| `verified` | Whether issuer has been verified |
| `created_at` | Record creation time |

## Learner

A learner is the person or entity receiving the credential.

Recommended fields:

| Field | Purpose |
|---|---|
| `learner_id` | Internal learner identifier |
| `display_name` | Name shown where appropriate |
| `email_hash` | Optional privacy-preserving email hash |
| `wp_user_id` | Linked WordPress user ID |
| `created_at` | Record creation time |

## Audit Event

An audit event records a credential lifecycle action.

Recommended fields:

| Field | Purpose |
|---|---|
| `event_id` | Unique audit event identifier |
| `credential_id` | Linked credential |
| `event_type` | Issue, verify, suspend, revoke, expire, renew, update |
| `actor_user_id` | User who performed action, where applicable |
| `actor_role` | Admin, issuer, learner, verifier, regulator |
| `reason` | Reason for lifecycle event |
| `metadata` | Additional structured data |
| `created_at` | Event time |

## Commercial Extensions

Commercial editions may extend the data model with:

- Issuer credit balances
- Accreditation metadata
- ESCO skills and occupation mappings
- Regulator visibility flags
- Assurance evidence records
- Verification analytics
- Multi-tenant institution IDs
- SSO identity mappings

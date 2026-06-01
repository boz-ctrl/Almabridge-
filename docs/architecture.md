# Architecture Overview

AlmaBridge Community Edition is designed as a self-hostable WordPress-based digital credential platform.

## Core Components

| Component | Purpose |
|---|---|
| WordPress plugin | Main application layer |
| Admin dashboard | Platform and issuer management |
| Issuer dashboard | Credential issuing and lifecycle actions |
| Learner dashboard | Learner credential access |
| Public verification page | Employer, regulator or third-party verification |
| Credential data model | Structured record of issuer, learner, outcome and status data |
| Audit log | Local evidence of lifecycle events |
| Blockchain reference layer | Storage of Solana transaction, mint or proof references |
| REST API | Integration point for issuing, status and verification workflows |

## High-Level Flow

1. Platform admin configures AlmaBridge.
2. Issuer is created or approved.
3. Issuer creates a credential record.
4. Credential is issued to a learner.
5. Credential status and audit event are stored locally.
6. Blockchain reference is recorded where configured.
7. Learner receives or accesses credential.
8. Employer, verifier or regulator checks credential using public verification.
9. Verification result displays issuer, credential, status and audit-relevant trust signals.

## Data Principles

AlmaBridge should minimise unnecessary personal data. Credential records should contain only the information needed to verify the credential and support learner, issuer and verifier trust.

## Open-Core Boundary

Community Edition focuses on basic credential issuing and verification. Commercial editions extend the architecture with production integrations, trust registry governance, analytics, assurance evidence packs, regulator dashboards, SSO and multi-tenant deployment.

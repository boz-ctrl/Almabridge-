# API Reference

This document summarises the intended API surface for AlmaBridge Community Edition.

The starter OpenAPI file is available at [`api/openapi.yaml`](../api/openapi.yaml).

## Core Endpoints

| Endpoint | Method | Purpose |
|---|---:|---|
| `/credentials` | POST | Issue or create a credential |
| `/credentials/{id}` | GET | Retrieve credential metadata |
| `/credentials/{id}/status` | GET | Check credential lifecycle status |
| `/credentials/{id}/verify` | GET | Verify credential validity |
| `/credentials/{id}/revoke` | POST | Revoke credential |
| `/credentials/{id}/suspend` | POST | Suspend credential |
| `/credentials/{id}/reinstate` | POST | Reinstate suspended credential |

## API Principles

- Validate all payloads.
- Avoid exposing unnecessary learner data.
- Require authentication for issuing, revocation and suspension.
- Allow public status verification only where configured.
- Log lifecycle events.
- Return clear machine-readable status values.

## Status Values

Recommended status values:

- `draft`
- `issued`
- `active`
- `suspended`
- `revoked`
- `expired`
- `renewed`

## Commercial API Extensions

Commercial editions may add:

- API keys and rate limits
- Bulk issuing APIs
- Moodle integration endpoints
- Issuer Trust Registry APIs
- Regulator reporting APIs
- ESCO mapping APIs
- Analytics exports
- Webhooks

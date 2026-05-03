# Transmissions — Refero Style

- Refero URL: https://styles.refero.design/style/63c1c0d1-d3b7-40f1-9b9d-8e3b5bd73f17
- Site URL: https://transmissions.cristobalbalenciagamuseoa.com
- ID: 63c1c0d1-d3b7-40f1-9b9d-8e3b5bd73f17
- Theme: light
- Industry: design
- Created: 2026-04-30T02:07:45.726Z
- Ranks: newest: 438, popular: 1166, trending: 1082

> Monochromatic editorial canvas

## Description

Transmissions employs a stark, high-fashion editorial aesthetic, characterized by extreme typographic scale shifts and a monochromatic palette. Visual emphasis is achieved through oversized headlines that dominate the canvas, often overlapping imagery, while interactive elements like navigation remain small and subtle. The design relies on high contrast and minimal ornamentation, creating a sense of sophisticated restraint and focus.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, large content blocks, default text for dark modes — forms the expansive white canvas |
| Ink Black | #000000 | neutral | Primary text, borders, high-contrast accents, link states |
| Phantom Black | #010101 | neutral | Secondary text, subtle borders, often used with Canvas White for maximal contrast |
| Ghost Gray | #f5f5f5 | neutral | Subtle background surfaces, border accents for text links |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Haas Grotesk Display | Inter | 400, 500 | 14px, 18px, 24px, 64px | 0.95, 1.00, 1.20 | Headlines, navigation elements, and textual content. The high proportion of large sizes and a tightly-wound lineHeight (0.95) makes it feel impactful and modern. Substitute: Inter. |
| Saol Display | Playfair Display | 500 | 24px, 64px | 0.95, 1.20 | Decorative headlines and specific callouts. Its distinct character provides a visual counterpoint to the sans-serif, used sparingly for emphasis. Substitute: Playfair Display. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.2 |  |
| body | 18 | 1.2 |  |
| heading | 24 | 1.2 |  |
| display | 64 | 0.95 |  |

## Spacing & Shape

```json
{
  "radius": {},
  "elementGap": "12px",
  "sectionGap": "134px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Header Navigation Link

**Role:** Top-level navigation items and brand identifier.

Text in Neue Haas Grotesk Display, 14px size, Ink Black, no specific letter spacing. Interacts with a subtle border effect on hover or active states. The brand name 'TRANSMISSIONS' acts as a prominent static header item.

### Menu Trigger

**Role:** Opens the main site navigation.

Small text 'MENU' in Neue Haas Grotesk Display, 14px, Ink Black, followed by a small, solid Ink Black circular indicator. Minimal padding.

### Hero Headline

**Role:** Dominant, attention-grabbing titles for key sections.

Large text using either Neue Haas Grotesk Display or Saol Display, 64px, Ink Black (or Canvas White if overlapping a dark image). Line height is very tight at 0.95 for an impactful, stacked appearance, often overlapping background visuals.

### Subtle Helper Text

**Role:** Captions and secondary information.

Text in Neue Haas Grotesk Display, 18px, Phantom Black, with a standard line height of 1.20 for readability in smaller blocks.

## Do's

- Prioritize Canvas White (#ffffff) and Ink Black (#000000) for high-contrast primary content and backgrounds.
- Use Neue Haas Grotesk Display 64px, lineHeight 0.95, for primary headlines, allowing it to overlap imagery.
- Implement small, minimal textual navigation links (14px Neue Haas Grotesk Display) rather than large buttons or icons.
- Maintain generous vertical spacing between content blocks, with section gaps often at 134px.
- Use Ghost Gray (#f5f5f5) sparingly for subtle background changes or very minimal borders on interactive elements.
- Apply all text in uppercase for headlines and navigation to maintain a stark, editorial tone.

## Don'ts

- Avoid using saturated or chromatic colors; stick strictly to the achromatic palette beyond imagery.
- Do not introduce complex components with multiple styles, shadows, or gradients.
- Refrain from using bold typefaces or heavy weights; 400 and 500 are the heaviest allowed.
- Do not deviate from the tight line heights (0.95-1.00) specified for headlines and 1.20 for body text.
- Do not add any explicit border radii to UI elements; all corners should remain sharp.
- Avoid large primary action buttons; all interactive elements should remain text-based and understated.

## Similar Brands

| Business | Why |
| --- | --- |
| Balenciaga | Shares a stark, high-fashion aesthetic with large typography and minimal color. |
| Vogue | Similar editorial layout approach, employing large, impactful typography and high-quality photography. |
| Calvin Klein (archival site) | Known for minimalist, high-contrast black and white branding with bold typographic statements. |
| Acne Studios | Often uses a stark, utilitarian aesthetic with large type and an emphasis on photographic content. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000 (Ink Black)
- background: #ffffff (Canvas White)
- border: #000000 (Ink Black)
- accent: no distinct accent color
- primary action: no distinct CTA color

Example Component Prompts:
- Create a top navigation bar: Canvas White background, brand name 'TRANSMISSIONS' in Neue Haas Grotesk Display 14px Ink Black (weight 400), and a 'MENU •' link in Neue Haas Grotesk Display 14px Ink Black (weight 400) aligned right.
- Generate a hero section: Canvas White background, a central image, with an overlaid headline 'FASHION NOW' in Neue Haas Grotesk Display 64px Ink Black (weight 500, lineHeight 0.95). Below the headline, a caption 'Exploring visual narratives' in Neue Haas Grotesk Display 18px Phantom Black (weight 400, lineHeight 1.20).
- Design a text link: '← Back' in Neue Haas Grotesk Display 14px (weight 400) Ink Black, with a hover state that changes text to Ghost Gray (#f5f5f5) while retaining an Ink Black border for effect, if applicable.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514847460-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514847460-thumb.jpg |

# Boutique8888 — Refero Style

- Refero URL: https://styles.refero.design/style/56e48057-de3e-47b6-8e59-772440703f0a
- Site URL: https://boutique8888.com
- ID: 56e48057-de3e-47b6-8e59-772440703f0a
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:52:46.769Z
- Ranks: newest: 277, popular: 946, trending: 863

> Crisp monochrome canvas.

## Description

Boutique8888 features a clean, high-contrast aesthetic with a distinct focus on clarity and directness. The visual system leverages a light canvas over a subtle background gradient, grounding prominent dark typography and dark-filled or light-outlined components. Interaction elements are clearly delineated through strong black and white contrast and rounded shapes, creating a focused and accessible user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight | #000000 | neutral | Primary text, button backgrounds, interactive link color, primary iconography. Establishes strong contrast |
| Storm Gray | #5b5b5b | neutral | Secondary text, subtle borders, inactive elements, supporting information. Provides visual hierarchy without harshness |
| Canvas White | #ffffff | neutral | Button text on dark backgrounds, outlined button strokes, primary surface color |
| Sky Wash | #c1e9ff | accent | Subtle background gradient base forming a diffused halo effect |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Shopify Sans | Inter | 400, 700 | 14px, 16px, 20px, 40px | 1.20 | Primary brand typeface for headings, body text, buttons, and links. Its custom nature reinforces brand identity. |
| Shopify Sans | Inter |  | 16px | 1.50 | Extended reading text and supporting content. Slightly increased line-height aids readability in longer blocks. |
| Times | Times New Roman | 400 | 16px | 1.20 | Fallback and specialized legal/footer text, providing a classic, authoritative counterpoint to the sans-serif. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 14 | 1.2 | 0 |
| body | 16 | 1.2 | 0 |
| heading | 20 | 1.2 | 0 |
| display | 40 | 1.2 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "20px",
    "buttons": "20px",
    "containers": "25px"
  },
  "elementGap": "10px",
  "sectionGap": "27px",
  "cardPadding": "20px",
  "pageMaxWidth": "1296px"
}
```

## Components

### Primary Filled Button

**Role:** Call to action

Solid 'Midnight' background with 'Canvas White' text, 20px border-radius, and generous horizontal padding of 60px. Text uses Shopify Sans at 16px.

### Outlined Button

**Role:** Secondary action

Transparent background with a 2px 'Canvas White' border and 'Midnight' text. 20px border-radius and 60px horizontal padding. Text uses Shopify Sans at 16px.

### Subtle Callout Card

**Role:** Informational container

A container with a 25px border-radius, likely used for the main content block. Contains text and buttons.

### Text Link

**Role:** Inline navigation or reference

Uses 'Midnight' text and is underlined by default. Inherits Shopify Sans font styles.

## Do's

- Use 'Midnight' (#000000) for all primary text and button backgrounds to ensure high contrast.
- Apply 'Canvas White' (#ffffff) for text on dark backgrounds and as a 2px border for outlined components.
- Maintain a consistent border-radius of 20px for all buttons and interactive links, and 25px for primary content containers.
- Utilize Shopify Sans (or Inter as substitute) for headlines and body text to maintain brand voice.
- Structure page content within a max-width of 1296px for consistent presentation.
- Employ the 'Sky Wash' gradient as a subtle background element where diffused light is desired, not as a primary content surface.

## Don'ts

- Avoid using multiple shades of gray for primary text; stick to 'Midnight' for focus and 'Storm Gray' for secondary details.
- Do not deviate from the specified border-radii of 20px for interactive elements and 25px for containers.
- Refrain from introducing additional accent colors; maintain the monochrome palette with subtle gradient backgrounds.
- Do not alter the letter-spacing for Shopify Sans; keep it at 'normal' unless otherwise specified in token definitions.
- Avoid applying solid background colors to large sections when the subtle 'Sky Wash' gradient is intended to provide a soft aesthetic.
- Do not use Times for primary headlines or UI elements; reserve it for specific legal or footer content.

## Layout

The page adheres to a max-width of 1296px, centered on the screen, creating a contained and structured feel. The hero content is a prominent, centrally aligned text block with two call-to-action buttons. Below this, content is arranged in a three-column grid, with left-aligned subordinate text blocks. Vertical spacing is consistent but not excessively dense. The footer is minimal, centered at the bottom. The overall pattern is a clear hierarchy of information presented in distinct, well-separated blocks.

## Imagery

The site uses minimal imagery, focusing on UI elements. The Shopify logo is crisp and monochrome. Icons are simple, outlined, and monochromatic, like the 'back' arrow. When present, imagery (like the Shopify logo at the bottom) appears self-contained, using strict brand colors and avoiding complex photographic elements. The primary visual weight is carried by typography and strong component shapes.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Similar high-contrast monochrome palette with focus on typography and geometric shapes. |
| Linear | Clean, spacious layouts with strong hierarchy and well-defined interactive components. |
| Vercel | Minimalist aesthetic using subtle background gradients and strong dark text on light backgrounds. |
| Apple (services) | Use of soft, almost imperceptible background gradients and a clear, functional component language. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f4f5f6
border: #ffffff
accent: #c1e9ff
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
Create an outlined secondary button with the text 'Sign up free': 2px #ffffff border, transparent background, #000000 text, 20px radius, 60px horizontal padding, Shopify Sans 16px.
Create a content card: #ffffff background, 25px border-radius, with Shopify Sans 40px 'Sorry, this is unavailable.' heading (#000000), followed by two buttons (primary and outlined) with 10px spacing vertically.
Create a footer link 'About Us': #000000 text, Shopify Sans 14px, with the logo beside it.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517548444-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517548444-thumb.jpg |

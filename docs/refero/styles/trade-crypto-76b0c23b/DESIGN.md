# Trade Crypto — Refero Style

- Refero URL: https://styles.refero.design/style/76b0c23b-7a09-49f6-a53c-cc6fc6258d5f
- Site URL: https://www.gemini.com
- ID: 76b0c23b-7a09-49f6-a53c-cc6fc6258d5f
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:48:04.668Z
- Ranks: newest: 694, popular: 606, trending: 426

> Precision on parchment: a financial platform that feels like an architect's blueprint, meticulously detailed on a bright white surface, with interactive elements highlighted in stark, electric blue.

## Description

Gemini's design system offers a crisp, compact, and confident interface for financial markets. It balances extensive negative space with information-dense cards, punctuated by a vibrant blue accent for interactive elements. The typography is modern and precise, contributing to an atmosphere of focused functionality rather than elaborate decoration, where every element serves a clear purpose.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #010304 | neutral | Primary text, darker borders, icon fill, active states for ghost buttons |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, button backgrounds, primary text on dark accents |
| Deep Graphite | #000000 | neutral | Navigation text, strong button backgrounds, bold iconography |
| Steel Gray | #999a9b | neutral | Muted text, subtle borders, secondary labels |
| Light Cloud | #e6e6e6 | neutral | Hairline separators, subtle background accents |
| Soft Fog | #676868 | neutral | Subheading text, descriptive content |
| Pale Mist | #808181 | neutral | Auxiliary text, granular data labels |
| Electric Blue | #005ff9 | accent | Violet text accent for links, tags, and emphasized short phrases. Do not promote it to the primary CTA color |
| Sky Tint | #c9e0ff | accent | Primary action button background, selected states |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Geist | Inter | 400 | 9px, 10px, 12px, 14px, 16px, 18px, 22px, 26px, 32px, 42px, 56px | 1.00 | Primary UI font for all textual content, from headings to body text and interactive elements. Its custom nature provides a distinct, clean aesthetic that feels tailored. |
| Geist | Inter Medium | 500 | 9px, 10px, 12px, 14px, 16px, 18px, 22px, 26px, 32px, 42px, 56px | 1.00 | Used for emphasizing key information and interactive labels, providing a subtle boost in visual weight without feeling heavy. It maintains the same crispness as 400 weight for a consistent system. |
| Geist | Inter SemiBold | 600 | 9px, 10px, 12px, 14px, 16px, 18px, 22px, 26px, 32px, 42px, 56px | 1.00 | Reserved for headlines and critical action text, providing a strong visual hierarchy while retaining the modern character of the font. The robust weight signifies importance. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.35 | -0.08 |
| subheading | 18 | 1.33 | -0.04 |
| heading-sm | 22 | 1.16 | -0.04 |
| heading | 32 | 1.15 | -0.12 |
| display | 56 | 1.07 | -0.2 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "12px",
    "cards": "20px",
    "inputs": "12px",
    "buttons": "1000px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action

Filled button with a Sky Tint background (#c9e0ff), Electric Blue text (#005ff9), and a full pill-shaped radius (1000px). Padding is 0px top/bottom and 32px left/right for a compact appearance.

### Ghost Button

**Role:** Secondary action / Navigation

Transparent background (rgba(0, 0, 0, 0)), Ink Black text (#010304). No explicit padding in its smallest variant, relying on text size for click area, used for navigation items.

### Outlined Button

**Role:** Tertiary action

White background (#ffffff), Ink Black text (#010304), subtle border of rgba(0, 0, 0, 0.1), and a 1000px pill-shaped radius. Padding of 1px top/bottom and 16px left/right.

### Dark Primary Button

**Role:** Hero or prominent action

Solid Deep Graphite background (#000000), Paper White text (#ffffff), and a 1000px pill-shaped radius. Padding of 0px top/bottom and 16px left/right.

### Information Card

**Role:** Content container

Paper White background (#ffffff), 20px border radius, and a subtle shadow (rgba(0, 0, 0, 0.08) 0px 8px 32px 0px). Internal padding of 24px on all sides.

### QR Code Card

**Role:** Unique interactive element

Paper White background (#ffffff), 16px border radius, and a larger shadow (rgba(0, 0, 0, 0.08) 0px 16px 64px 0px). Internal padding of 12px on all sides.

### Minimal Card

**Role:** Compact grouped information

Light gray background (oklab(0 0 0 / 0.05)), 12px border radius, no shadow. Padding of 0px top/bottom and 16px left/right.

### Prediction Input Card

**Role:** Interactive prediction logic

Paper White background (#ffffff), 16px border radius, and a subtle shadow (rgba(0, 0, 0, 0.08) 0px 8px 32px 0px). Internal padding of 16px top, 20px right, 16px bottom, 16px left.

### Text Input

**Role:** User entry field

Transparent background (rgba(0, 0, 0, 0)), Paper White text (#ffffff), with a Steel Gray border (#767676). Padding of 10px top/bottom and 16px left/right.

## Do's

- Prioritize Paper White (#ffffff) as the dominant background for all content cards and primary page surfaces.
- Use Ink Black (#010304) for primary text and Deep Graphite (#000000) for navigation and prominent button text to ensure high contrast.
- Apply a 1000px border-radius to all primary action buttons for a distinctly pill-shaped aesthetic.
- Employ the Sky Tint (#c9e0ff) background with Electric Blue (#005ff9) text for clear, functional primary call-to-actions.
- Maintain a compact information density using Geist typeface with precise letter-spacing, particularly tighter tracking for larger display text.
- Utilize a consistent element gap of 8px for spacing elements within components and small clusters.
- Elevate cards with a subtle shadow (rgba(0, 0, 0, 0.08) 0px 8px 32px 0px) and a radius of 20px to differentiate content blocks.

## Don'ts

- Avoid using highly saturated, non-brand colors; restrict the palette primarily to neutrals with the defined Electric Blue and Sky Tint accents.
- Do not deviate from the Geist typeface; its specific weights and letter-spacing define the brand's typographic tone.
- Refrain from using hard-edged or overly sharp corners on interactive or grouped elements; prefer radii of 12px to 1000px.
- Do not introduce heavy gradients or complex background patterns; maintain a clean, flat surface treatment for most UI elements.
- Avoid excessive use of elevation; reserve shadows for distinct interactive cards and key UI elements to guide attention.
- Do not use generic system fonts; the custom Geist font is critical to the brand's visual identity.
- Do not introduce large, decorative imagery that distracts from functional UI; focus on product-showcasing or abstract graphics when necessary.

## Layout

The page primarily uses a full-bleed structure, with key content areas constrained to a central column (implied max-width around 1200px from overall screenshot analysis). The hero section is characterized by a central headline and subtext, often over a clean white background, framed by functional navigation. Section rhythm is provided by distinct content blocks and cards on a uniform white canvas. Content is arranged in flexible patterns, including centered stacks for key messages, simple left-aligned text with right-aligned card interactions, and grids for showcasing features or data. The layout avoids visual dividers between sections, relying on consistent vertical spacing for flow. Navigation is a sticky top bar, providing immediate access to key brand links and calls to action.

## Imagery

The site's imagery is sparse, prioritizing UI and functionality over abstract visuals. When present, it features tight, product-focused illustrations like the rounded-rectangle app icon, or simplified graphic elements such as the basketball icon in the prediction interface. Icons are line-drawn and monochrome (often Deep Graphite or Ink Black), maintaining a clean, technical feel. Photography is notably absent, reinforcing a sense of precise, data-driven interaction. Imagery serves an explanatory or functional role, never purely decorative, and occupies minimal space relative to text and data.

## Elevation

| Element | Style |
| --- | --- |
| Information Card | rgba(0, 0, 0, 0.08) 0px 8px 32px 0px |
| QR Code Card | rgba(0, 0, 0, 0.08) 0px 16px 64px 0px |
| Prediction Input Card | rgba(0, 0, 0, 0.08) 0px 8px 32px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Coinbase | Shares a clean, high-contrast light theme with a focus on clear data presentation and functional elements over elaborate design. |
| Revolut | Utilizes a compact, systematic UI with tight typography and a limited but distinct accent color to highlight interactive elements and states in a financial context. |
| Stripe | Employs a minimalist aesthetic with extensive use of whitespace, precise typography, and subtle component elevation to convey professionalism and clarity. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #010304
background: #ffffff
border: #e6e6e6
accent: #005ff9
primary action: #c9e0ff (filled action)

### 3-5 Example Component Prompts
1. Create a Primary Action Button: #c9e0ff background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a `Prediction Input Card` showing 'Orlando vs Detroit': Paper White background (#ffffff), 16px radius, rgba(0, 0, 0, 0.08) 0px 8px 32px 0px shadow. Internal padding 16px top, 20px right, 16px bottom, 16px left. Headline 'Place a prediction' in Ink Black (#010304), Geist weight 600 at 22px, letter-spacing -0.04em.
3. Build a navigation bar item: Ghost Button style, Ink Black text (#010304), Geist weight 500 at 14px, letter-spacing -0.0290em. No background, no border, no padding. Hover state shifts text to Electric Blue (#005ff9).
4. Create a `Minimal Card` to display data: oklab(0 0 0 / 0.05) background, 12px radius, no shadow. Internal padding 0px vertical, 16px horizontal. Text in Deep Graphite (#000000), Geist weight 500 at 16px, letter-spacing -0.0290em.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510050679-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510050679-thumb.jpg |

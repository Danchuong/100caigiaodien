# Mews — Refero Style

- Refero URL: https://styles.refero.design/style/6b2777fd-7021-4a96-add3-ec4a32374214
- Site URL: https://www.mews.com/en
- ID: 6b2777fd-7021-4a96-add3-ec4a32374214
- Theme: light
- Industry: other
- Created: 2026-04-30T00:14:32.679Z
- Ranks: newest: 860, popular: 722, trending: 575

> Digital Ledger Precision

## Description

Mews employs a 'digital ledger' aesthetic: a pristine white canvas combined with clear, dark typography creates an impression of precision and order. Components are often outlined or utilize subtle shadow work to define interactive zones rather than heavy fills. A specific vivid pink provides a digital accent for primary actions and highlights, contrasting with the otherwise monochromatic UI background.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, UI elements requiring clean separation |
| Midnight Ink | #000000 | neutral | Primary text, critical borders, dark mode backgrounds for hero sections |
| Cloud Gray | #f4f5f9 | neutral | Subtle background for ghost buttons and secondary content cards |
| Steel Gray | #333333 | neutral | Secondary text, less prominent UI elements |
| Charcoal Black | #161616 | neutral | Elevated card backgrounds, dark accents |
| Dusty Gray | #8c8c8c | neutral | Muted text or icon accents, placeholder states |
| Outline Gray | #cccccc | neutral | Hairline borders, subtle dividers |
| Digital Pink | #ffc5ee | accent | Primary action backgrounds, interactive highlights — a vivid, almost neon presence against the neutral interface |
| Soft Lilac | #f7e1f7 | accent | Alternative accent background for banners or themed cards, a softer complement to Digital Pink |
| Sky Tint | #d2f4ff | accent | Subtle background for notification cards or soft promotional panels |
| Neon Pop | #ff83da | accent | Illustrative accents, decorative highlights, small icon fills — used sparingly to create vibrant points of interest |
| Chartreuse Glow | #e8ff5b | accent | Green action color for filled buttons, selected navigation states, and focused conversion moments. Use as a supporting accent, not as a status color |
| Cool Stone | #c4c9dd | neutral | Subtle decorative strokes, icon outlines, or very light text in specific contexts |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| soehne | system-ui, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif | 400, 500, 600, 700, 900 | 11px, 12px, 13px, 14px, 15px, 16px, 17px, 18px, 20px, 22px, 28px, 32px, 40px, 48px, 64px, 72px, 96px | 0.80, 0.90, 1.00, 1.03, 1.10, 1.15, 1.20, 1.35, 1.50 | The primary typeface for all text elements. Features a wide range of weights, used dynamically for commanding headlines, legible body text, and distinct button labels. The tighter letter-spacing especially at larger sizes contributes to a crisp, digital aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 | 0.05 |
| body | 15 | 1.35 |  |
| subheading | 22 | 1.2 |  |
| heading-sm | 28 | 1.15 |  |
| heading | 48 | 1.1 | -0.96 |
| heading-lg | 72 | 1.03 | -1.44 |
| display | 96 | 0.9 | -2.4 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "cards": "6px",
    "buttons": "8px",
    "default": "4px"
  },
  "elementGap": "10px",
  "sectionGap": "80px",
  "cardPadding": "16px",
  "pageMaxWidth": "1278px"
}
```

## Components

### Hero Dark Card

**Role:** Prominent information display

A large, dark surface with a #000000 background, 6px border-radius, and generous 80px padding on all sides. Used for dramatic, text-heavy introductory blocks.

### Primary Action Button

**Role:** Call to action

Filled with Digital Pink (#ffc5ee), text is Midnight Ink (#000000), 8px border-radius, 48px vertical padding, 44px horizontal padding. A visually commanding element.

### Ghost Pill Button

**Role:** Secondary action or tag

Transparent background with Canvas White (#ffffff) text and border. Features an extreme 9999px border-radius for a pill shape and minimal 0px vertical, 12px horizontal padding. Used for subtle categorization or less prominent actions.

### Subtle Background Button

**Role:** Informational button or filter

Uses Cloud Gray (#f4f5f9) as background, Midnight Ink (#000000) for text, 8px border-radius, and significant 48px vertical, 44px horizontal padding. Less assertive than the primary action, but still prominent.

### Feature Grid Card

**Role:** Display individual features or services

A Canvas White (#ffffff) background, 6px border-radius, with crisp implicit content padding, often appearing in grid layouts. Defines distinct content blocks within a section.

### Dark Overlay Promo Card

**Role:** Specialized content highlight

A card with Charcoal Black (#161616) background, 6px border-radius, and often no explicit padding (content manages its own internal spacing). Used for high-contrast promotional items.

### Accordion Item

**Role:** Collapsible content area

Uses Canvas White (#ffffff) background with an Outline Gray (#cccccc) 1px border. Text is Midnight Ink (#000000). Active state highlights with a touch of Neon Pop (#ff83da).

## Do's

- Prioritize Canvas White (#ffffff) as the primary background for all page sections unless an intentional dark contrast is required.
- Use Midnight Ink (#000000) for all primary text elements and critical borders to maintain high contrast and clarity.
- Apply Digital Pink (#ffc5ee) specifically for primary calls to action, ensuring it stands out against neutral backgrounds.
- Incorporate 6px border-radius for all cards and container elements to maintain a consistent subtle softening.
- Maintain an 'elementGap' of 10px where distinct elements require separation in horizontal or vertical stacks.
- Use the soehne typeface with specific negative letter-spacing for headlines (e.g., -0.025em at 96px) to achieve a modern, condensed feel.
- Ensure generous vertical section spacing of 80px between major content blocks to create a comfortable rhythm.

## Don'ts

- Do not introduce new vibrant colors unless they serve a specific brand or semantic function; maintain the predominantly achromatic palette with precise accent usage.
- Avoid heavy drop shadows or intrusive gradients; surfaces should primarily be flat or have minimal depth created by a single solid border.
- Do not use generic system fonts; always specify soehne or its recommended substitute with defined weights and line heights.
- Refrain from using small radius values (e.g., 2px) on cards or buttons; maintain 6px for cards and 8px for buttons, with 9999px for pill-shaped elements.
- Do not break content beyond the 1278px pageMaxWidth; all main content should be horizontally centered within these bounds.
- Avoid unnecessary visual clutter. The system thrives on clear visual hierarchy and ample whitespace.
- Do not use plain, neutral grays for interactive states; interactive elements should leverage Digital Pink (#ffc5ee) or a distinct visual change.

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Shares a clean, grid-based layout with prominent cards and a focus on functional, precise UI elements against a white background. |
| Linear | Exhibits a similar compact, high-contrast typography style, particularly in headings, paired with a predominantly neutral palette and a single vibrant accent color. |
| Stripe | Uses a similar approach to elegant, minimal UI with a strong emphasis on typography and a restrained use of color to guide user attention and define interactive elements. |
| Notion | Employs a clean, productivity-focused interface with ample whitespace and well-defined content blocks, relying on clear textual hierarchy rather than decorative elements. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #000000 (Midnight Ink)
- background: #ffffff (Canvas White)
- border: #cccccc (Outline Gray)
- accent: #ff83da (Neon Pop)
- primary action: #e8ff5b (filled action)

### 3-5 Example Component Prompts
1.  **Create a Hero Dark Card:** Use background #000000 (Midnight Ink), border-radius 6px, and 80px padding. Place a soehne weight 900 headline at 64px, color #ffffff (Canvas White), with letter-spacing -1.6px. Include a Secondary Action Button below it.
2.  Create a Primary Action Button: #e8ff5b background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3.  **Design a Feature Grid Card:** Use background #ffffff (Canvas White), border-radius 6px. Include a soehne weight 600 heading at 20px, color #000000 (Midnight Ink), and body text at 15px, color #333333 (Steel Gray). Maintain at least 16px internal padding for content.
4.  **Create an Accordion Section:** Each item has a #ffffff (Canvas White) background, 1px solid #cccccc (Outline Gray) border. Title is soehne weight 500 at 18px, color #000000 (Midnight Ink). In the active state, highlight the expanding area with a faint touch of #ff83da (Neon Pop) where applicable.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508024894-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508024894-thumb.jpg |

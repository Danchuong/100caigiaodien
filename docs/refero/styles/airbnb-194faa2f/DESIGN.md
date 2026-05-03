# Airbnb — Refero Style

- Refero URL: https://styles.refero.design/style/194faa2f-2f69-4bbf-9e29-290f28fa8ca2
- Site URL: https://airbnb.org
- ID: 194faa2f-2f69-4bbf-9e29-290f28fa8ca2
- Theme: light
- Industry: other
- Created: 2026-04-30T03:57:03.648Z
- Ranks: newest: 21, popular: 502, trending: 337

> High-contrast editorial canvas

## Description

Airbnb.org utilizes a stark, high-contrast visual system with strong typographic emphasis. It pairs a near-achromatic palette of warm blacks and cool grays with ample negative space to spotlight content. Headings are bold and expansive, while body text remains precise and legible. Components are minimally styled, relying on shape and hierarchy rather than elaborate ornamentation, creating an atmosphere of directness and clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon Black | #222222 | neutral | Primary text, deep surface backgrounds, strong button fills, interactive element borders — creates high contrast against white |
| Canvas White | #ffffff | neutral | Page backgrounds, inverse text, ghost button borders — provides a clean, expansive base |
| Faint Gray | #f7f7f7 | neutral | Secondary section backgrounds, subtle surface separation, footer background — adds a soft visual break from Canvas White |
| Storm Gray | #6a6a6a | neutral | Muted text, secondary headings — provides visual relief without losing legibility |
| Pale Drift | #ebebeb | neutral | Subtle background shifts, faint dividers |
| Dust Bunny | #a6a6a6 | neutral | Subtle button backgrounds, decorative strokes |
| Soft Divider | #dddddd | neutral | Hairline borders, subtle separators |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Airbnb Cereal VF | system-ui, sans-serif | 400, 500, 700 | 14px, 16px, 18px, 22px, 26px, 48px, 52px, 72px | 1.13, 1.14, 1.15, 1.18, 1.19, 1.20, 1.25, 1.27, 1.29, 1.33, 1.43, 1.56 | The core brand typeface, used across all textual elements from large, impactful headlines to small utility text. Its variable nature allows for precise weight control, contributing to the site's clear, confident, and direct tone. Letter spacing is subtly tightened for display sizes to enhance visual density without sacrificing legibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 18 | 1.56 | -0.01 |
| subheading | 22 | 1.33 | -0.01 |
| heading | 26 | 1.25 | -0.02 |
| heading-lg | 48 | 1.2 | -0.03 |
| display | 72 | 1.13 | -0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "4px",
    "buttons": "8px",
    "default": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "48-64px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call to action, drawing immediate attention.

Filled button with Carbon Black background (#222222), Canvas White text (#ffffff), 8px border-radius, and generous padding of 16px vertical, 32px horizontal.

### Video Player Control Button

**Role:** Overlay controls for embedded video content.

Semi-transparent dark circular button (rgba(32, 32, 32, 0.4)) with Canvas White icon (#ffffff), 50% border-radius, and compact 7px padding.

### Ghost Header Button

**Role:** Secondary actions in the header navigation.

Transparent background, Carbon Black text (#222222), 8px border-radius, with 6px vertical and 8px horizontal padding. Borders are implicitly handled by the text color.

### Content Card

**Role:** Container for distinct blocks of information or media.

Carbon Black background (#222222), 12px border-radius, no internal padding or shadows.

## Do's

- Prioritize high contrast using Carbon Black (#222222) for dominant text and interactive elements against Canvas White (#ffffff) backgrounds.
- Utilize Faint Gray (#f7f7f7) for subtle background shifts to imply section breaks without harsh dividers.
- Apply 8px border-radius to all primary buttons and 12px to content cards to ensure consistent contemporary shaping.
- Maintain generous vertical spacing between content sections (48-64px) to create an open and comfortable reading experience.
- Use Airbnb Cereal VF weight 700 for page headings and key calls-to-action to establish clear hierarchy and strong messaging.
- Keep components visually lightweight, relying on color and spacing for differentiation rather than heavy borders or shadows.
- Tighten letter spacing for larger type sizes (e.g., -0.03em at 72px) to optimize visual density and impact.

## Don'ts

- Avoid using multiple chromatic colors; limit the palette primarily to neutrals, reserving color for semantic accents not present on this page.
- Do not introduce decorative gradients or complex shadows; maintain the flat, high-contrast aesthetic.
- Do not vary border-radius arbitrarily; stick to the established 12px for cards, 8px for buttons, and 4px for specific links.
- Do not clutter layouts with extraneous elements; embrace negative space to spotlight core content and messages.
- Avoid using light text on light backgrounds; always ensure a AAA contrast ratio for readability, especially for body text.
- Do not deviate from the Airbnb Cereal VF typeface; ensure all text adheres to its defined weights and line heights.
- Do not introduce complex UI animations; favor direct transitions and subtle hovers that align with the site's straightforward nature.

## Layout

The site employs a max-width contained layout, centering content on an expansive Canvas White background. The hero section features a prominent, centered headline with supporting text, typically followed by a focused video or informational graphic. Sections alternate between Canvas White and Faint Gray backgrounds, with consistent vertical spacing (48-64px) creating a clear rhythm. Content blocks are often centered stacks of text or simple 1-column layouts, emphasizing direct readability over complex grid structures. The navigation is a minimalist top bar with ghost links and a single primary action button.

## Imagery

Minimal imagery focused on high-quality video embeds and maps. Videos are contained within dark, rounded-corner elements, presenting content directly without heavy styling. The map treatment is a flat, monochromatic vector graphic, reinforcing the clean, informational aesthetic. Icons, when present, are simple, outlined, and monochromatic, aligning with the UI's understated nature. Imagery serves primarily to explain or provide context, not to decorate heavily, leaving the textual content dominant.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a clean, high-contrast aesthetic with generous use of white space and strong, legible typography. |
| Linear | Features a similar focus on typographic hierarchy, monochromatic palette, and functional, minimal component design. |
| Apple (services pages) | Employs large, bold headlines against clean backgrounds, creating an authoritative and direct brand voice, often with minimal imagery. |
| Notion | Known for its highly readable, content-focused interface with minimal visual clutter and excellent use of whitespace. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #222222
background: #ffffff
border: #222222
accent: no distinct accent color
primary action: #222222 (filled action)

3-5 Example Component Prompts:
1. Create a Primary Action Button: #222222 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a content section: Faint Gray (#f7f7f7) background. Section title 'Reinventing emergency stays.' in Airbnb Cereal VF weight 700 at 48px, #222222, letter-spacing -0.03em. Body text 'We believe that...' in Airbnb Cereal VF weight 400 at 18px, #6a6a6a, line-height 1.56, letter-spacing -0.01em.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521400731-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521400731-thumb.jpg |

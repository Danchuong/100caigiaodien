# Palantir IR — Refero Style

- Refero URL: https://styles.refero.design/style/6bc3526f-0a25-4198-8a57-07872946988e
- Site URL: https://investors.palantir.com
- ID: 6bc3526f-0a25-4198-8a57-07872946988e
- Theme: dark
- Industry: other
- Created: 2026-04-30T03:28:06.579Z
- Ranks: newest: 146, popular: 383, trending: 212

> Midnight data console

## Description

Palantir Investor Relations embodies a 'data-driven dark academia' aesthetic, presenting information within a clean, monochromatic environment. The design prioritizes content with high contrast typography against dark surfaces, using subtle geometric patterns and delicate borders instead of bold colors or heavy embellishments. Interaction is minimal, with an emphasis on direct navigation and clear data presentation, maintaining a serious and authoritative tone.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #15161a | neutral | Primary background color for cards and other primary surfaces, providing a deep, consistent dark base |
| Storm Gray | #1f2426 | neutral | Background for secondary surfaces, headers, and subtle borders, slightly lighter than Midnight Ink to create minimal depth |
| Ghost White | #f6f6f6 | neutral | Primary text color for maximum readability against dark backgrounds, also used for outlines and inactive indicators |
| Subtle Gray Gradient | #e3e3e3 | accent | Decorative background for visual elements, adding a touch of dimensional texture without introducing strong color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Alliance No.2 | Arial | 400 | 10px, 12px, 14px, 16px, 28px, 96px | 1.12, 1.15, 1.19, 1.20, 1.22 | All textual content, from large headings to body text and navigation. Its precise letter-spacing and feature sets ('lnum', 'ss04', 'tnum') create a crisp, engineered feel crucial for a data-focused brand. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.12 | 0.3 |
| body | 14 | 1.19 |  |
| heading | 28 | 1.22 |  |
| display | 96 | 1.22 | -0.96 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "panels": "6px"
  },
  "elementGap": "10px",
  "sectionGap": "55px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Hero Headline

**Role:** Primary page title

Large (96px) Ghost White text in Alliance No.2, weight 400, with tight letter-spacing (-0.03em) presented on a Storm Gray background with geometric overlays. Provides immediate visual impact.

### Navigation Link

**Role:** Top-level site navigation

Ghost White text (size 14px or 16px, weight 400) in Alliance No.2, separated by a light slash divider. No background, minimal padding, direct and functional. Border-bottom appears on hover in Storm Gray.

### Ghost Button

**Role:** Navigation and secondary calls to action

Ghost White text (14px or 16px) using Alliance No.2, weight 400, on a transparent background. Features an underline effect on hover/active states formed by Storm Gray border-bottom.

### Information Card

**Role:** Content segmentation and presentation

Uses Midnight Ink (#15161a) as background, with 6px border-radius. No internal padding, relying on external spacing. Can contain headings and body text in Ghost White, occasionally integrating subtle gradients for visual interest.

### Minimal Card

**Role:** Secondary content cards

Uses Storm Gray (#1f2426) as background, with 6px border-radius. No internal padding. Presents content in Ghost White.

## Do's

- Use Midnight Ink (#15161a) for primary background surfaces and Storm Gray (#1f2426) for secondary UI elements to establish clear visual hierarchy.
- Apply Alliance No.2 font consistently across all text elements; utilize its specific letter-spacing values: -0.03em for display sizes (96px) and 0.03em for smaller text (10px-12px).
- Maintain a monochrome palette with Ghost White (#f6f6f6) for all primary text and interaction states.
- Employ 6px `radius` for all cards and panel-like containers, avoiding sharper or more rounded corners.
- Structure layouts with a `sectionGap` of 55px and an `elementGap` of 10px to create spacious, organized content blocks.
- Utilize a 1px Storm Gray (`#1f2426`) border for interactive elements and subtle content dividers, as seen in navigation links and card outlines.
- Incorporate subtle geometric overlays or abstract gradients, such as the Subtle Gray Gradient, as decorative elements within dark backgrounds, rather than colorful imagery.

## Don'ts

- Avoid introducing additional vivid or saturated colors outside of the established monochrome palette and subtle accent gradients.
- Do not use heavy shadows or strong elevation effects; rely on subtle background variations and borders for depth.
- Refrain from using bold type weights; Alliance No.2 weight 400 is the standard for all text, conveying authority through clarity, not volume.
- Do not use generic button styles; interactive elements should be minimal, often text-based with subtle underlines or thin borders.
- Avoid decorative imagery with lifestyle photography or human elements; focus on abstract, geometric, or product-screenshot-like visuals.
- Do not vary border-radius significantly; stick to 6px for all rounded elements.
- Avoid dense, information-packed sections with minimal whitespace; maintain generous `sectionGap` and `elementGap` for readability.

## Layout

The page primarily uses a full-bleed dark background for its canvas. The hero section is full-bleed, showcasing a centered headline with large typography over a dark background enriched with subtle geometric patterns. Content sections often alternate between different shades of dark gray backgrounds, with consistent vertical spacing (55px `sectionGap`). Content is frequently arranged in multi-column grids (like the two-column card layout), with an emphasis on centered textual content or text-adjacent visual blocks. The navigation is a minimalist sticky top bar with text links and a subtle separator.

## Imagery

Imagery is minimal and abstract, prioritizing geometric patterns (circles, hexagons) and subtly faded gradients over photography or illustrations. Illustrations are linear, outlined, and monochromatic, used sparsely to enrich background areas or complement text. Icons are outlined, simple, and white, matching the overall stark, technical aesthetic. The few visuals serve an atmospheric or explanatory role, never dominating the content and always maintaining a low-key presence.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Monochromatic interface with crisp typography and subtle geometric accents within a dark theme. |
| Vercel | Dark-mode default with a strong focus on technical, data-driven content presentation and minimal decorative elements. |
| Linear | Clean, highly functional dark UI with an emphasis on typography and structured information display over heavy visual embellishments. |
| Dark-mode dashboards | High contrast data presentation on dark backgrounds with a focus on graphs and structured information blocks. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #f6f6f6
background: #15161a
border: #1f2426
accent: #e3e3e3
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero section for 'Q4 Earnings Report': Storm Gray background (#1f2426). Headline 'Q4 Earnings Report' in Ghost White (#f6f6f6), Alliance No.2, size 96px, weight 400, letter-spacing -0.03em. Subtext '02 / 02 / 26' below it in Ghost White, Alliance No.2, size 16px, weight 400. Include a 'MORE ↗' link in Ghost White, size 14px, weight 400, with a 1px Storm Gray (#1f2426) border-bottom on hover.
2. Design an 'Information Card' for 'YouTube Channel': Midnight Ink (#15161a) background, 6px border-radius, with no internal padding. Title 'YouTube Channel' in Ghost White (#f6f6f6), Alliance No.2, size 28px, weight 400. Content below is a geometric line illustration in Ghost White.
3. Implement a 'Navigation Link' for 'Financials': Ghost White (#f6f6f6), Alliance No.2, size 14px, weight 400, on a transparent background. On hover, apply a 1px (#1f2426) border-bottom.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519667846-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519667846-thumb.jpg |

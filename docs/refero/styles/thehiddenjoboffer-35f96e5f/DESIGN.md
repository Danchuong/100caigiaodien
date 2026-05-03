# Thehiddenjoboffer — Refero Style

- Refero URL: https://styles.refero.design/style/35f96e5f-f48a-4158-be2f-293a45c81fa3
- Site URL: https://thehiddenjoboffer.net
- ID: 35f96e5f-f48a-4158-be2f-293a45c81fa3
- Theme: dark
- Industry: other
- Created: 2026-04-30T02:13:53.118Z
- Ranks: newest: 414, popular: 1231, trending: 1220

> deep violet canvas, quiet atmosphere

## Description

Thehiddenjoboffer.net employs a subtle, dark-themed aesthetic with a strong emphasis on spaciousness and restrained interactivity. Its visual identity centers around a deep violet canvas, accented by lighter purples and a 'velvet gray' for muted text and borders. Typography is clean and direct, relying on a system sans-serif contrasted with bold headlines. The overall impression is one of quiet, understated elegance, with minimal elements allowing content to breathe.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Violet | #5e42a6 | brand | Primary background for hero and main page sections, creating a dark, immersive canvas |
| Aubergine | #493382 | brand | Subtler background for footer and secondary content blocks, providing depth within the violet palette |
| Velvet Gray | #a29cb0 | neutral | Muted text, hairline borders, and decorative lines. Its cool tone adds a sophisticated counterpoint to the violet |
| Lunar White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Fog Gray | #79718d | neutral | Fine borders and very subtle text elements, appearing muted against the violet background |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | system-ui | 400, 700 | 10px, 14px, 17px, 22px, 48px | 1.00, 1.50, 1.75 | A minimal sans-serif choice for both headings and body text, ensuring direct readability. The tight line height of 1.00 for 48px headings creates a compact, strong visual presence, while the wider 1.50-1.75 for smaller text offers comfort. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.25 |
| body-sm | 14 | 1.75 | 0.25 |
| body | 17 | 1.75 | 0.25 |
| subheading | 22 | 1.5 | 0.25 |
| display | 48 | 1 | 0.25 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "31.2px"
  },
  "elementGap": "21px",
  "sectionGap": "43px",
  "cardPadding": "",
  "pageMaxWidth": "1113px"
}
```

## Components

### Outline Pill Button

**Role:** Primary action button, providing a clear call to action without a filled background, maintaining the light touch of the design.

Outline button with a border of 1px solid 'Lunar White' (#ffffff), 'Lunar White' (#ffffff) text, and 31.2px border-radius. Padding is 39px horizontally and 14px vertically. Text is Arial at 14px weight 400 with 0.25em letter-spacing.

### Navigation Link

**Role:** Discreet navigation items in the sidebar, providing subtle guidance.

Text link in 'Velvet Gray' (#a29cb0) using Arial at 10px weight 400, with a 1px solid 'Velvet Gray' (#a29cb0) border-bottom.

### Dominant Headline

**Role:** High-impact headlines, designed to quickly convey key information.

Large text in Lunar White (#ffffff), Arial at 48px weight 700 with a line-height of 1.0 and 0.25em letter-spacing.

## Do's

- Use 'Deep Violet' (#5e42a6) as the default background for large hero sections and primary page areas.
- Apply 'Aubergine' (#493382) for content blocks or footers to introduce subtle tonal shifts without breaking the dark theme.
- Set dominant headlines (48px) in 'Lunar White' (#ffffff) and Arial 700 with a tight line height of 1.0 for maximum impact.
- Use 'Velvet Gray' (#a29cb0) for all hairline borders and muted textual elements to maintain a sophisticated contrast.
- Maintain a clear visual hierarchy by limiting prominent colors to backgrounds and primary text, and using 'Velvet Gray' (#a29cb0) for secondary details.
- Ensure interactive elements like buttons have a high border-radius of 31.2px, creating a distinctive pill shape.
- Implement consistent horizontal padding of 39px and vertical padding of 14px for interactive elements.

## Don'ts

- Avoid introducing bright, saturated colors outside the specified violet range, as this contradicts the site's muted palette.
- Do not use heavy box-shadows or gradients, as the design philosophy leans towards flat surfaces and minimal elevation.
- Do not vary font families; stick to the specified Arial (or system-ui) to maintain typographic consistency.
- Avoid dense layouts; prioritize generous spacing with '21px' as the base element gap and '43px' for section gaps.
- Do not use filled buttons as primary actions; prefer the outlined pill button style with white text on a dark background.
- Do not use dark text colors on the 'Aubergine' (#493382) or 'Deep Violet' (#5e42a6) backgrounds, as contrast will be insufficient.

## Layout

The layout is characterized by a two-column structure. A narrow, dark violet sidebar on the left (`#312450`, inferred from contrast data as background for #a29cb0 links) houses navigation, while the main content area occupies the majority of the screen with a broader, lighter violet background (`#5e42a6`). Content is primarily centered within this main area, featuring a large headline, explanatory body text, and a centered interactive button. The max-width of the content appears to be around 1113px, ensuring a contained experience even on wider screens. Vertical rhythm is established through generous section gaps of 43px.

## Imagery

The site uses minimal imagery, primarily relying on abstract, light-line vector graphics on the main violet background. These lines form geometric patterns that provide subtle texture and depth without distracting from the core content or introducing photographic elements. Icons are not visible, suggesting a text-dominant, clean UI approach prioritizing pure typography and layout.

## Similar Brands

| Business | Why |
| --- | --- |
| Fathom Analytics | Uses a dark, minimalist UI with a single accent color for interaction and a focus on clean typography. |
| Linear | Employs a sophisticated dark theme with subtle background variations and a primary focus on UI elements over heavy imagery. |
| Notion | Known for a clean, spacious aesthetic that prioritizes content and typography, even in its darker themes. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: text: #ffffff, background: #5e42a6, border: #a29cb0, accent: #5e42a6, primary action: no distinct CTA color

Example Component Prompts:
Create a hero section: 'Deep Violet' (#5e42a6) background. Headline 'The Hidden Job Offer' at 48px Arial weight 700 letter-spacing 0.25em, in 'Lunar White' (#ffffff). Subtext 'Please come back soon...' at 17px Arial weight 400 letter-spacing 0.25em, in 'Velvet Gray' (#a29cb0). A centered 'Outline Pill Button' with 'Lunar White' (#ffffff) border and text, 31.2px radius, 39px horizontal and 14px vertical padding, with text 'DISCOVER SOON!' at 14px Arial weight 400.
Create a navigation sidebar: 'Aubergine' (#493382) background. A 'Navigation Link' with 'Velvet Gray' (#a29cb0) text 'WELCOME' at 10px Arial weight 400 with 1px solid 'Velvet Gray' (#a29cb0) border-bottom.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515198569-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515198569-thumb.jpg |

# Coco — Refero Style

- Refero URL: https://styles.refero.design/style/a6fa9927-43a8-49fc-87ea-a41407766af3
- Site URL: https://www.getcoco.com
- ID: a6fa9927-43a8-49fc-87ea-a41407766af3
- Theme: light
- Industry: productivity
- Created: 2026-04-30T01:24:21.588Z
- Ranks: newest: 610, popular: 1307, trending: 1298

> Playful, energetic cards

## Description

Coco employs a vibrant, playful aesthetic with a strong emphasis on card-based layouts and bold accent colors. The design system layers bright, saturated hues onto a clean, spacious light background, creating an energetic and approachable feel. Typography is assertive and compact, reinforcing a sense of efficiency, while generously rounded corners on components soften the overall impression.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Sky Blue | #23c4f7 | brand | Primary action buttons, prominent informational cards, decorative accents — a vivid, inviting blue that feels approachable and active |
| Vivid Orchid | #da4dfd | accent | Illustrative card backgrounds, accent sections — provides a punchy, playful contrast |
| Fresh Mint | #00d797 | accent | Illustrative card backgrounds, accent sections — a bright, optimistic green for variety and emphasis |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, prominent text (on dark backgrounds) |
| Slate Gray | #636363 | neutral | Body text, secondary headings, border elements — a desaturated, readable text color |
| Ink Black | #000000 | neutral | Primary headings, strong emphasis text, icon fills |
| Medium Gray | #808080 | neutral | Muted text, subtle borders, placeholder content |
| Light Ash | #aaadb0 | neutral | Tertiary text, subtle icons, decorative elements |
| Ghost Gray | #ebebeb | neutral | Subtle button backgrounds, divider lines, disabled states — allows elements to recede |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT America | Inter | 500, 700 | 12px, 13px, 14px, 24px, 32px, 64px | 1.00, 1.13, 1.17, 1.25, 1.33, 1.43, 1.54 | All text elements, from headings to body text, maintaining a consistent, modern, and slightly condensed feel across the interface. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.54 |  |
| body | 14 | 1.33 |  |
| subheading | 24 | 1.25 | -0.24 |
| heading | 32 | 1.17 | -0.32 |
| display | 64 | 1 | -1.28 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "links": "3px",
    "images": "32px",
    "buttons": "100px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with a Sky Blue (#23c4f7) background and Canvas White (#ffffff) text. Features fully rounded corners for a soft, friendly appearance. Padding: 8px vertical, 24px horizontal. Font: GT America, weight 500.

### Secondary Ghost Button

**Role:** Supporting action

Outlined button with a transparent background, Ink Black (#000000) border, and Ghost Gray (#ebebeb) text. Features fully rounded corners. Padding: 8px vertical, 24px horizontal. Font: GT America, weight 500.

### Informational Card

**Role:** Content container

Basic card with Canvas White (#ffffff) background and 24px border-radius. No shadow. Inner padding of 40px on all sides.

### Sky Blue Feature Card

**Role:** Prominent feature display

Card with Sky Blue (#23c4f7) background and 24px border-radius. No shadow. Inner padding of 48px on all sides.

### Orchid Feature Card

**Role:** Alternate feature display

Card with Vivid Orchid (#da4dfd) background and 24px border-radius. No shadow. Inner padding of 48px on all sides (vertical) and 0px (horizontal).

### Mint Feature Card

**Role:** Alternate feature display

Card with Fresh Mint (#00d797) background and 24px border-radius. No shadow. Inner padding of 48px on all sides.

## Do's

- Prioritize Sky Blue (#23c4f7) for primary calls to action, maintaining its vividness against neutral backgrounds.
- Use 24px border-radius consistently for all card-like containers to reinforce the soft, approachable aesthetic.
- Employ GT America 700 (bold) for all main headings (32px, 64px) using Ink Black (#000000) or Canvas White (#ffffff) for strong contrast.
- Apply -0.0200em letter-spacing to display text (64px) and -0.0100em to subheading (24px) and heading (32px) text to ensure a compact, controlled typographic rhythm.
- Maintain generous 40px or 48px internal padding for cards to provide ample breathing room for content.
- Incorporate Vivid Orchid (#da4dfd) and Fresh Mint (#00d797) as accent backgrounds for cards to create visual variety and playful energy, ensuring text contrast remains legible.

## Don'ts

- Do not introduce new border-radius values; stick to 24px for cards, 100px for buttons, 32px for images, and 3px for links.
- Avoid using multiple font families; all text should be GT America or its substitute.
- Do not add drop shadows to cards; the design relies on bold background colors and flat surfaces for visual hierarchy.
- Do not use dark backgrounds for entire sections, except when explicitly required for accent or specific content blocks; the theme is predominantly light.
- Avoid small, subtle text for calls to action; ensure action text uses GT America 500 and high contrast colors like Canvas White (#ffffff) on Sky Blue (#23c4f7).

## Layout

The page model is content-constrained, with sections centered and significant horizontal margins, but the exact `pageMaxWidth` value is not provided. The hero section features a prominent, full-width section with a dark header (branding + navigation) and a large, centered headline followed by subtext, and a central app-like illustration. Subsequent sections alternate between white and colored card backgrounds (Sky Blue, Vivid Orchid, Fresh Mint), typically presenting information in two-column text + image or illustration layouts. Vertical spacing between sections is generous and consistent, creating a spacious feel. Navigation is a simple top bar with branding on the left and primary actions (buttons) on the right.

## Imagery

The site uses a mix of abstract, geometric illustrations with vibrant, saturated colors (Vivid Orchid, Fresh Mint, Sky Blue) and product screenshots featuring app interfaces. Illustrations are flat, bold, and organic, often combining large colored shapes. Photography is minimal, focusing on app or social media screenshots. Icons are solid, simple, and monochrome, usually in Ink Black. Imagery serves primarily as decorative atmosphere and explanatory content, occupying significant visual space in card-like containers without overflowing.

## Similar Brands

| Business | Why |
| --- | --- |
| Canva | Uses a vibrant, playful color palette and prominent card-based UI with soft, rounded corners. |
| Mailchimp | Employs an illustrative, friendly brand identity with strong typography and clear, action-oriented layouts. |
| Babbel | Features a clean, spacious interface with bold, distinct accent colors for different UI elements and a focus on clarity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #636363
accent: #da4dfd
primary action: #23c4f7 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #23c4f7 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create an Informational Card: Canvas White (#ffffff) background. 24px radius. 40px padding. Inside, a heading (Ink Black, GT America 700, 32px, lh 1.17, ls -0.32px) and body text (Slate Gray, GT America 500, 14px, lh 1.33).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512243203-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512243203-thumb.jpg |

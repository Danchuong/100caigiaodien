# UGLYCASH — Refero Style

- Refero URL: https://styles.refero.design/style/680cf16b-0093-473b-854f-f1de9af5e698
- Site URL: https://ugly.cash
- ID: 680cf16b-0093-473b-854f-f1de9af5e698
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:30:40.693Z
- Ranks: newest: 777, popular: 630, trending: 462

> High-contrast digital pop: Bold black text on bright canvas, punctuated by vivid neons.

## Description

UGLYCASH embraces a stark, high-contrast digital-first aesthetic with deeply saturated accent colors that pop against a near-white canvas and stark black typography. The visual style is bold, with large, confident headlines and playful, oversized rounded corners for interactive elements and content cards. Imagery is integrated directly into the UI as product showcases rather than decorative backdrops. The system balances aggressive typography with a comfortable, open layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Ice | #f2f2f2 | neutral | Page backgrounds, default surfaces beyond explicit cards |
| Ghost Gray | #e6e4e4 | neutral | Subtle background for UI elements, dividers |
| Polar White | #ffffff | neutral | Content card backgrounds, elevated surfaces |
| Carbon Black | #000000 | neutral | Primary text, headings, strong borders, dark card backgrounds, interactive elements |
| Deep Graphite | #3a3a3a | neutral | Dark card backgrounds, secondary dark surfaces |
| Muted Stone | #6e6e6e | neutral | Muted text, secondary body copy |
| Soft Stone | #888888 | neutral | Tertiary body copy, small print, helper text |
| Cream Card | #e7e3bf | neutral | Distinctive card background for specific content blocks |
| Power Pink | #fa00ff | accent | Vivid accent for cards, graphic elements |
| Sky Blue | #02bbff | accent | Vivid accent for cards, graphic elements, data visualization |
| Lime Pop | #adff02 | accent | Vivid accent for links, graphic elements, small interactive highlights |
| Metal Gradient Light | #817d72 | neutral | Subtle metallic gradient for decorative elements, card borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | Arial | 400 | 12px | 1.20 | System default for small utility text, captions, and fallback body copy. |
| Helvetica Now Display Cn Bold | Montserrat Black | 700, 900 | 20px, 64px, 85px, 164px | 0.85, 0.94, 1.20 | Display and primary headings – bold, compact, and impactful, defined by tight letter-spacing for a modern, aggressive presence. |
| Inter | Inter | 400, 500, 700 | 12px, 14px, 18px, 20px, 24px | 1.17, 1.20, 1.22, 1.29, 1.33, 1.40 | Body copy and subheadings – provides readability at various sizes with a slightly condensed feel. |
| Miss Fajardose |  | 400 | 38px | 1.2 | Miss Fajardose — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 | -0.24 |
| body-sm | 14 | 1.4 | -0.28 |
| body | 18 | 1.22 | -0.36 |
| subheading | 20 | 1.17 | -0.4 |
| heading | 64 | 0.94 | -2.11 |
| display | 164 | 0.85 | -5.41 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "100px",
    "large": "46px",
    "small": "1px",
    "default": "16px"
  },
  "elementGap": "10px",
  "sectionGap": "96px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button Inverse

**Role:** Minimal interactive element for secondary actions or navigation.

Transparent background, Carbon Black text and border. No border-radius, for a stark, flat look. Padding is 10px vertically by 5px horizontally. Text uses a system sans-serif font at 12px.

### Pill Accent Button

**Role:** Primary Call to Action, visually distinct and inviting interaction.

Carbon Black background with 100px border-radius creating a pill shape. Text is the browser default link color rgb(0,0,238). Zero vertical padding, 24px horizontal padding. Prompts interaction through shape.

### Rounded Accent Button

**Role:** Secondary action or featured link, with a soft background.

Translucent dark gray background rgba(237, 237, 237, 0.15), 16px border-radius. Text is the browser default link color rgb(0,0,238). Zero vertical padding, 24px horizontal padding. Used for 'Get the APP'.

### White Information Card

**Role:** Standard container for content blocks and feature explanations.

Polar White background, 16px border-radius, no shadow. Zero padding, content manages its own internal spacing.

### Cream Accent Card

**Role:** Highlight card for special features, uses a distinct neutral background.

Cream Card background (#e7e3bf), 46px border-radius for an oversized, playful shape. No shadow, zero padding.

### Dark Graphic Card

**Role:** Visual cards that integrate product imagery or bold graphics.

Can be Carbon Black (#000000), Deep Graphite (#3a3a3a), or #000100 background. Features an oversized 38px or 43px border-radius. No shadow, zero padding. Used for presenting app screenshots or abstract graphics.

## Do's

- Use Canvas Ice (#f2f2f2) for the primary page background to maintain the light theme.
- Employ Helvetica Now Display Cn Bold with a letter-spacing of -0.033em for all major headlines to convey impact and density.
- Apply 10px elementGap for most interactive and content grouping, providing comfortable visual separation.
- Utilize 16px border-radius for standard cards, images, and links to maintain a consistent soft containment.
- Ensure all body text uses Inter font with a letter-spacing of -0.02em to support readability while retaining a modern feel.
- Use Power Pink (#fa00ff), Sky Blue (#02bbff), and Lime Pop (#adff02) as vivid accents against predominantly achromatic surfaces.
- Implement 96px for sectionGap to provide ample vertical whitespace between major content blocks.

## Don'ts

- Avoid using light, subtle headlines; all significant text should be in Carbon Black (#000000) for maximum contrast.
- Do not introduce new border-radius values; stick to 16px, 46px, 43px, 38px from the defined system.
- Refrain from adding drop shadows; the design relies on stark contrast and distinct colorful accents, not depth perception.
- Do not use generic button styles; always apply either the Ghost Button Inverse, Pill Accent Button, or Rounded Accent Button tokens.
- Avoid breaking the high-contrast principle; never use a low-contrast color pairing for fundamental text or interactive elements.
- Do not use generic sans-serif for body text; always prefer Inter for its distinct visual rhythm and letter-spacing.

## Layout

The page primarily uses a full-bleed layout, allowing content to stretch across the full width, though some sections appear to have an implicit centered content area. The hero pattern features a dominant, center-aligned headline over a soft background, often followed by product visuals. Sections are separated by comfortable `sectionGap` (96px) and maintain a spacious vertical rhythm, avoiding dense information blocks. Content arrangement often alternates between large headlines, centered product showcases, and multi-column grids for features, typically 3 columns. Navigation is handled by a minimal top bar with social links and a 'Get the APP' action button.

## Imagery

Imagery primarily consists of clean, isolated product screenshots of the UGLYCASH app or abstract graphics with a highly saturated, neon color palette. These visuals are often integrated directly into cards, appearing as contained elements rather than full-bleed backgrounds. The app screenshots are sharp, showcasing UI details clearly without excessive styling or context. Icons are simple, outlined or filled, and primarily mono-color, often in Carbon Black or one of the vivid accent colors. The role of imagery is primarily explanatory content and product showcase, with a moderate density.

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | High-contrast text on light backgrounds with strong accent colors and modern sans-serif typography. |
| Cash App | Utilizes bold, impactful typography and vivid accent colors within a clean, app-like UI structure. |
| Chime | Focus on approachable, modern design for financial services, featuring clear contrast and simple forms. |
| Monzo | Combines a clean, bright interface with judicious use of saturated colors for highlights and branded elements. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
text: #000000
background: #f2f2f2
border: #000000
accent: #fa00ff
primary action: no distinct CTA color

**3-5 Example Component Prompts:**
1. Create a hero section with a centered headline: 'YOUR BANK WON'T DO THIS' using Helvetica Now Display Cn Bold, size 164px, weight 900, hex #000000, letter-spacing -5.41px. Ensure the background is Canvas Ice (#f2f2f2).
2. Generate a feature card: White Information Card with 'Earn' as the heading using Inter font 20px, weight 700, and a body text describing earning. Below it, add a small Lime Pop (#adff02) square accent.
3. Create a navigation bar: Ghost Button Inverse 'More videos' to the left, a Pill Accent Button to the right (background: #000000, text: rgb(0,0,238), border-radius 100px, 24px horizontal padding), and a Rounded Accent Button 'Get the APP' (background: rgba(237, 237, 237, 0.15), text: rgb(0,0,238), border-radius 16px, 24px horizontal padding) next to it.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509016757-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509016757-thumb.jpg |

# Elvina Prasad — Refero Style

- Refero URL: https://styles.refero.design/style/717a2f6f-bc7d-4f9a-adcb-1465fdf77c9a
- Site URL: https://www.elvinaprasad.com
- ID: 717a2f6f-bc7d-4f9a-adcb-1465fdf77c9a
- Theme: light
- Industry: design
- Created: 2026-04-30T01:40:40.985Z
- Ranks: newest: 548, popular: 1035, trending: 1017

> Academic monograph with confident typography.

## Description

This system projects an academic, almost stark modernity with its high-contrast monochrome palette. The design relies on generous white space and bold typography for impact. Interaction is subtle, using ghost buttons and thin borders rather than heavy fills. The overall atmosphere is discerning and direct, prioritizing content and clarity over decorative flourishes.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary text color on dark backgrounds |
| Ink Black | #000000 | neutral | Primary text, icon fill, background for hero sections |
| Text Graphite | #333333 | neutral | Secondary text, link text, borders for ghost buttons and images |
| Surface Frost | #f7f7f7 | neutral | Subtle background for UI elements and alternate section backgrounds, providing a soft contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Montreal |  | 300, 400, 500 | 11px, 18px, 27px, 178px | 1.00, 1.10, 1.30, 1.40 | The primary typeface for headlines, body text, and UI elements. Its large scale and precise letter-spacing contribute to the academic and confident tone. |
| Neue Montreal Variable |  | 400 | 14px, 32px, 38px, 40px | 1.00, 1.43 | Used for navigation, links, and specific UI elements, it mirrors the primary typeface's characteristics while offering some subtle variations. |
| Arial | System Sans-serif | 400 | 14px | 1.43 | Fallback font, or for small, utility-style text like helper text or captions. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.4 | 0.05 |
| body-sm | 14 | 1.43 | 0.05 |
| body | 18 | 1.3 | 0.05 |
| subheading | 27 | 1.1 | 0.05 |
| heading-sm | 32 | 1 | 0.05 |
| heading | 40 | 1 | 0.05 |
| display | 178 | 1 | 0.05 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "85px",
  "cardPadding": "21px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Link

**Role:** Primary navigation element

Text link using Neue Montreal Variable at 40px, Text Graphite color, with no background and a 1px solid Text Graphite border on hover or active states. This creates a subtle interactive response.

### Body Text Block

**Role:** Standard paragraph content

Uses Neue Montreal at 18px / 1.3 line height, Ink Black color, with generous overall padding of 21px or more. This prioritizes readability and emphasizes the content.

### Hero Headline

**Role:** Main page headline

Uses Neue Montreal at 178px / 1.0 line height, Canvas White on an Ink Black background, or Ink Black on a Canvas White background. The massive scale and tight line height create a bold, overlapping visual effect.

### Scroll Indicator Text

**Role:** Directional UI helper

Small label for directional cues, uses Arial 14px, Text Graphite color, often accompanied by an icon. Emphasizes utility over display.

### Minimal Call to Action Button

**Role:** Secondary action button

A very minimalist button style consisting of a 1px solid Text Graphite border and Text Graphite body text (Neue Montreal Variable 14px), with a transparent background. No distinct background color, relying on borders for definition.

### Image Border

**Role:** Framing for visual content

Images are typically framed with a 1px solid '#333333' border, giving them a subtle definition against the background.

## Do's

- Prioritize Neue Montreal for all textual elements unless explicitly specified otherwise, using its full range of weights (300, 400, 500).
- Maintain a bold, high-contrast aesthetic using Ink Black on Canvas White or Canvas White on Ink Black as the primary foreground/background pairs.
- Apply a consistent letter-spacing of 0.0500em for all Neue Montreal and Neue Montreal Variable text to maintain its unique visual signature.
- Utilize 'Text Graphite' (#333333) for all border details, ensuring a unified and subtle visual separation for elements like buttons and images.
- Use generous vertical spacing, typically 85px between major sections, to create an open and uncrowded page layout.
- Employ 'Surface Frost' (#f7f7f7) sparingly as a subtle background for secondary UI elements or to break up white sections without introducing strong color.

## Don'ts

- Avoid decorative gradients or shadows; the visual system is flat and direct, relying on high contrast and typography.
- Do not introduce strong accent colors or vivid hues unless for specific visual assets (e.g., product screenshots) that are considered content, not UI.
- Resist the temptation to add rounded corners; elements should predominantly use sharp, 0px radii.
- Do not deviate from the specified letter-spacing of 0.0500em for display and body text, as it's a key brand identifier.
- Avoid dense, information-heavy blocks of text; instead, break content into manageable, well-spaced paragraphs.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | High-contrast minimalist interface, focus on direct typography and functional elements. |
| Linear | Clean, almost sparse UI with deliberate use of spacing and emphasis on clear type hierarchy. |
| Are.na | Grid-based layouts, focus on content and strong visual separation with minimal decorative styling. |
| Dropbox Design | Subtle use of color, heavy reliance on grayscale, and powerful typography for brand expression. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: text: #000000, background: #ffffff, border: #333333, accent: no distinct accent color, primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section: Ink Black background. Headline 'Human centred designs' using Neue Montreal 178px weight 400, Canvas White color. Add a 'KEEP SCROLLING' body-sm caption in #ffffff with a simple outlined arrow icon, #ffffff stroke.
2. Design a portfolio item card: Canvas White background. An image with a 1px solid #333333 border. A subheading 'Phare Branding' using Neue Montreal 27px weight 400, Ink Black color, with 21px padding.
3. Implement a ghost navigation button for 'MENU': Neue Montreal Variable 40px weight 400, Ink Black color. No background, 1px solid #333333 border on hover.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513222176-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513222176-thumb.jpg |

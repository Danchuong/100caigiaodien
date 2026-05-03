# Doo — Refero Style

- Refero URL: https://styles.refero.design/style/d486c348-fc1b-4b01-9064-1213e4dbcb1b
- Site URL: https://getdooapp.com
- ID: d486c348-fc1b-4b01-9064-1213e4dbcb1b
- Theme: light
- Industry: productivity
- Created: 2026-04-30T03:39:09.936Z
- Ranks: newest: 102, popular: 963, trending: 812

> White Canvas Productivity

## Description

Doo presents a clean, productivity-focused interface with an emphasis on spacious layouts and subtle interactivity. Its visual identity is built on high-contrast typography against a primarily white canvas, accented by soft, rounded cards and a single, deep violet for primary actions. The design minimizes visual clutter, using thin borders and ghost-like elements to define structure, allowing content to take center stage.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | *Page backgrounds, primary card surfaces, pristine backdrop for content.* |
| Subtle Gray | #f7f7f7 | neutral | *Secondary card surfaces, slightly differentiated visual areas within cards.* |
| Border Fog | #edeef3 | neutral | *Hairline borders, subtle dividers, ghost button borders.* |
| Text Primary | #383938 | neutral | *Primary headings and body text — a very dark gray for high readability.* |
| Text Secondary | #6e6d7a | neutral | *Secondary text, navigation items, descriptive labels, and helper text.* |
| Shadow Ink | #111111 | neutral | *Deepest text areas, darkest shadow effects when present.* |
| Action Violet | #5e45a2 | brand | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Avenir Next | system-ui, sans-serif | 400, 600 | 13px, 16px, 17px, 20px, 29px, 39px, 65px | 1.00, 1.20, 1.80 | *Headline and body typography, offering a clean, approachable, and highly readable foundation for all text across the interface. The contrast between medium and bold is managed to maintain visual lightness.* |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.2 | 0.13 |
| body-sm | 16 | 1.2 | 0.16 |
| subheading | 20 | 1.2 | 0 |
| heading-sm | 29 | 1.2 | 0 |
| heading | 39 | 1 | -0.4 |
| display | 65 | 1 | -0.8 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "30px",
    "buttons": "39px"
  },
  "elementGap": "20px",
  "sectionGap": "187px",
  "cardPadding": "30px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Action Button

**Role:** Filled button

Primary action button with a deep violet background, white text, and highly rounded corners. text-color: #ffffff (Canvas White), background-color: #5e45a2 (Action Violet), border-radius: 39px.

### Ghost Navigation Link

**Role:** Primary navigation item, text-based

Navigation links are simple text, often with subtle hover states (not explicitly detected but implied), using the secondary text color. text-color: #6e6d7a (Text Secondary), font-weight: 400.

### Default Content Card

**Role:** Standard container for information

Cards feature large rounded corners and a soft, slightly off-white background, creating a distinct visual separation from the main canvas. background-color: #f7f7f7 (Subtle Gray), border-radius: 30px, padding: 30px.

### Minimal Card

**Role:** Container without explicit padding

Used when content directly abuts edges or components provide their own padding. background-color: #ffffff (Canvas White), border-radius: 30px, padding: 0px.

### Accent Card

**Role:** Card with a light background tint

Cards with a very light background hue, providing a subtle visual break. background-color: #e7efff (extracted from rgb(231, 239, 255)), border-radius: 30px, padding: 0px.

### Muted Text Badge

**Role:** Small text label

Used for descriptive tags or inline annotations. text-color: #6e6d7a (Text Secondary), background-color: transparent, border-radius: 0px, padding: 0px.

## Do's

- Maintain a spacious layout, ensuring a minimum sectionGap of 187px between major content blocks.
- Use Avenir Next, weight 400 for body text and weight 600 for headings, adhering to the defined type scale and letter-spacing values to maintain visual lightness.
- Apply Canvas White (#ffffff) as the dominant background for body and primary surfaces, creating a bright, uncluttered feel.
- Round all interactive elements like buttons and input fields with a 39px border-radius.
- Ensure all cards use a 30px border-radius and either Subtle Gray (#f7f7f7) or Canvas White (#ffffff) backgrounds.
- Define UI hierarchy using subtle distinctions: Text Primary (#383938) for main content, Text Secondary (#6e6d7a) for supportive details and navigation, and Border Fog (#edeef3) for minimal outlines.
- Reserve Action Violet (#5e45a2) exclusively for primary calls to action, active states, and elements that require immediate user interaction.

## Don'ts

- Avoid heavy shadows or strong gradients; the interface should remain largely flat and airy.
- Do not introduce new typefaces; rely solely on Avenir Next for consistency in brand voice.
- Refrain from using saturated colors other than Action Violet, particularly for backgrounds or large areas.
- Do not use box-shadow for elevation; rely on background color changes and subtle borders for surface distinction.
- Avoid dense information blocks; instead, break content into digestible sections with generous padding and clear visual separation.
- Do not deviate from the defined border-radius values of 39px for buttons and 30px for cards; this is a core aspect of the brand's friendly professional aesthetic.
- Never use generic system link blue (#0000ee) for text links; use Text Secondary (#6e6d7a).

## Layout

The page primarily uses a max-width 1200px centered layout for content, sitting on a full-bleed white background. The hero section is characterized by a centered dominant headline and subtext, followed by a primary action button. Subsequent sections maintain consistent vertical spacing (approx. 187px sectionGap) and often feature large product screenshots or mockups that break the max-width constraint, extending closer to the edge or being centrally placed. Content is arranged in alternating visual rhythm, often implying a text-left/visual-right pattern, with prominent product visuals. Navigation is a minimal top bar with subtly styled links and the brand logo, indicating a focus on content over complex navigation structures.

## Imagery

This site prominently features product screenshots embedded within devices (MacBooks, iPhones, Apple Watches) on pristine white backgrounds. The screenshots are presented cleanly, often angled or slightly overlapping to create visual interest while maintaining focus on the app interface itself. There are no lifestyle photos or abstract illustrations. Iconography (visible in product screenshots) appears to be outlined or ghost-style with a thin stroke. Imagery serves to showcase the product's functionality and visual design directly, demonstrating the app in its native environments.

## Similar Brands

| Business | Why |
| --- | --- |
| Things 3 | Shares a clean, minimalist aesthetic with rounded UI elements and a focus on essential functionality over decorative visuals. |
| Any.do | Similar white-space heavy design, compact typography, and a strategic use of a single accent color for primary actions. |
| Cultured Code | Employs a stark white background, crisp typography, and product screenshots within device mockups to showcase app features. |
| Todoist | Focuses on high readability, a restrained color palette, and clear visual hierarchy for a productivity application. |
| Linear | Known for a clean, fast UI, minimal border treatments, and strong typographic hierarchy on a light canvas. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #383938
background: #ffffff
border: #edeef3
accent: #5e45a2
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Design a default informational card: background #f7f7f7, border-radius 30px, 30px padding. Inside, place a heading (Avenir Next weight 600 at 29px, #383938) and a body paragraph (Avenir Next weight 400 at 17px, #383938).
3. Generate a top navigation bar: Canvas White background, 108px height, containing a 'Doo' logo (place at left, use brand's visual identity), and ghost navigation links (Text Secondary #6e6d7a, Avenir Next weight 400 at 17px) evenly spaced to the right, with a 21px elementGap between links.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520327153-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520327153-thumb.jpg |

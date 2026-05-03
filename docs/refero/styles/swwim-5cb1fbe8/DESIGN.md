# Swwim — Refero Style

- Refero URL: https://styles.refero.design/style/5cb1fbe8-b539-4482-b645-74a745332965
- Site URL: https://www.weswwim.com
- ID: 5cb1fbe8-b539-4482-b645-74a745332965
- Theme: light
- Industry: agency
- Created: 2026-04-30T02:23:51.496Z
- Ranks: newest: 380, popular: 1001, trending: 1012

> Deep Ocean Canvas

## Description

Swwim projects a bold, impactful, and trustworthy brand image using a striking primary blue contrasted with crisp white typography. The design emphasizes clear hierarchy through large, confident sans-serif headlines and functional, rounded secondary elements. Its comfortable density allows content to breathe while maintaining a strong visual presence. Accents are primarily subtle and tonal, reinforcing the main brand blue.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ocean Blue | #1658b3 | brand | Primary brand color for backgrounds and prominent headings, indicating stability and clarity |
| Midnight Indigo | #0d3c88 | brand | Darker variant used for footer backgrounds, subtle textural elements, and deeper tonal contrast |
| Sky Blue | #015fee | brand | Decorative fill for illustrations and graphical elements, adding visual interest |
| Horizon Blue | #01295f | brand | Subtler fill for decorative graphics, providing depth within brand blue hues |
| Canvas White | #ffffff | neutral | Default page background, primary text color on dark surfaces, and button fills for contrast |
| Smoke Grey | #e5e7eb | neutral | Hairline borders, subtle dividers, and inactive states, used for structural separation |
| Jet Black | #000000 | neutral | Default text color on light backgrounds and for high-contrast icons |
| Parchment | #eee1d9 | neutral | Decorative fill and stroke for accent graphics and illustrations |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Greycliff | system-ui, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif | 400, 500, 700 | 14px, 16px, 18px, 20px, 24px, 30px | 1.20, 1.25, 1.33, 1.40, 1.43, 1.50, 1.56 | Primary font for body text, links, and less prominent headings, providing clear readability and a modern aesthetic. Weights 400 and 500 maintain a professional yet approachable feel across UI elements. |
| Baton Turbo | Impact, 'Arial Black', sans-serif | 400 | 14px, 16px, 18px, 29px, 36px, 48px, 151px | 1.00, 1.11, 1.43, 1.50, 1.56 | Signature display font primarily for large, impactful headlines, conveying a bold and authoritative brand voice due to its condensed, blocky nature. Its use is reserved for maximum visual effect. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.5 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 18 | 1.43 | 0 |
| heading-sm | 20 | 1.4 | 0 |
| heading | 24 | 1.33 | 0 |
| heading-lg | 30 | 1.25 | 0 |
| display | 151 | 1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "0px",
    "buttons": "9999px"
  },
  "elementGap": "4px",
  "sectionGap": "24px",
  "cardPadding": "24px",
  "pageMaxWidth": "1080px"
}
```

## Components

### Outline Ghost Button

**Role:** Interactive element for secondary actions.

Background: transparent (rgba(0, 0, 0, 0)). Text Color: Canvas White (#ffffff). Border: 1px solid Smoke Grey (#e5e7eb) with 9999px radius. Padding: 8px vertical, 16px horizontal.

### Solid White Button

**Role:** Primary Call to Action.

Background: Canvas White (#ffffff). Text Color: Ocean Blue (#1658b3). Radius: 9999px. Padding: 8px vertical, 24px horizontal.

### Text Link Button

**Role:** Minor interactive elements and navigation links.

Background: transparent (rgba(0, 0, 0, 0)). Text Color: Canvas White (#ffffff). No border, no radius, no padding.

### Hero Headline

**Role:** Primary visual communication on section headers.

Font: Baton Turbo, weight 400. Font size varies greatly (e.g., 151px in hero). Color: Canvas White (#ffffff). Letter spacing: normal. Appears over Ocean Blue background.

### Body Text

**Role:** Standard conveying informational detail.

Font: Greycliff, weight 400. Font size 16px. Line height: 1.5. Color: Canvas White (#ffffff) on dark backgrounds, Jet Black (#000000) on light backgrounds.

### Navigation Item

**Role:** Interactive element for site navigation.

Font: Greycliff, weight 400. Text Color: Canvas White (#ffffff). No background, border, or radius. Padding: 0px.

## Do's

- Use Ocean Blue (#1658b3) as the dominant background for hero sections and key informational blocks.
- Employ Baton Turbo font (weight 400) exclusively for large, impactful headlines, ensuring normal letter spacing.
- Style all primary action buttons with Canvas White (#ffffff) background, Ocean Blue (#1658b3) text, and a 9999px border-radius with 8px vertical and 24px horizontal padding.
- Utilize Smoke Grey (#e5e7eb) for subtle 1px borders on cards and dividers, creating clear structural separation without visual weight.
- Apply a 9999px border-radius to all buttons and tags to maintain a consistent soft, modern edge.
- Set default body text in Greycliff (weight 400, 16px) with Canvas White (#ffffff) on dark fields and Jet Black (#000000) on light fields.

## Don'ts

- Do not use Baton Turbo for body text or subheadings; reserve it for large display typography only.
- Avoid using multiple accent colors; stick to the brand blue palette and neutrals for all UI elements.
- Do not introduce square corners on interactive elements; all buttons and small components should use the 9999px radius.
- Refrain from heavy drop shadows or complex elevation; maintain a generally flat and clean aesthetic with minimal border emphasis.
- Do not use dark text colors on Ocean Blue (#1658b3) backgrounds, always prioritize Canvas White (#ffffff) for readability.
- Avoid using gradients beyond decorative illustrations; UI surfaces should remain solid color fills.

## Layout

The page uses a maximum-width contained layout at 1080px, with content centered. The hero section is full-bleed Ocean Blue (#1658b3) with a large, centered headline and secondary descriptive text, often featuring abstract illustrations or small, contrast-rich photographs. Sections primarily feature comfortable vertical spacing (around 24px) but can vary. Content arrangement favors a stacked approach, especially for headlines and body text, with occasional two-column layouts pairing text with imagery. Card grids are not prominently featured in the provided view. The navigation is a minimalist top bar with 'Contact Us' and 'Menu' buttons on the right, floating above the hero.

## Imagery

The imagery style is a mix of high-quality, muted photographs and blocky, abstract illustrations. Photographs, when present, appear as small, contained visual accents, often cropped tightly on products or context-setting elements (e.g., a hand, a flag) rather than expansive lifestyle shots. Illustrations use the brand's blue palette and parchment, featuring bold, geometric shapes and limited detail, serving a decorative atmosphere rather than explanatory content. Icons are minimal, outlined, and primarily monochromatic white on dark backgrounds or black on light backgrounds, maintaining a light stroke weight. The overall density is text-dominant, with imagery serving as visual punctuation or supporting accents.

## Similar Brands

| Business | Why |
| --- | --- |
| Social Chain | Bold use of primary brand color as background for hero/key sections, large confident typography. |
| Wave.video | Heavy reliance on a strong blue as the main brand identifier, paired with clean white text for impact. |
| Buzzer | Minimal UI elements with a focus on strong typographic hierarchy and specific rounded button styles. |
| Hootsuite | Clear, direct visual language with a dominant blue palette and a mix of strong headlines and functional body text. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff (on dark), #000000 (on light)
Create an Outlined Primary Action: Transparent background, #1658b3 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
border: #e5e7eb
accent: #0d3c88
primary action: #1658b3 (outlined action border)

Example Component Prompts:
1. Create a hero banner with an Ocean Blue (#1658b3) background. The main headline should be 'SOCIAL MEDIA MARKETING THAT FLOATS' using Baton Turbo 151px, weight 400, color Canvas White (#ffffff). Include a body text below it, 'Collaborating with content specialists, influencers and all-round creative types...' in Greycliff 16px, weight 400, color Canvas White (#ffffff).
3. Create a navigation item: text 'Services' using Greycliff 16px, weight 400, color Canvas White (#ffffff), no background, no padding.
4. Design a ghost button: Outline Ghost Button (transparent background, #ffffff text, 1px solid #e5e7eb border, 9999px radius, 8px vertical 16px horizontal padding) with the text 'Dive right in'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515806273-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515806273-thumb.jpg |

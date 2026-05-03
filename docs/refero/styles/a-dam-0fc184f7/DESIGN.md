# A-dam — Refero Style

- Refero URL: https://styles.refero.design/style/0fc184f7-6143-4303-8e3d-0e2f075f76b2
- Site URL: https://a-dam.com
- ID: 0fc184f7-6143-4303-8e3d-0e2f075f76b2
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:32:36.032Z
- Ranks: newest: 128, popular: 1020, trending: 867

> Electric blue minimalist playground

## Description

A-dam embodies a playful, energetic aesthetic with a strong commitment to brand identity. Dominant dark blue accents punctuate a clean, bright white canvas, creating distinct contrasts. Typography is confident yet friendly, utilizing a custom geometric sans-serif for both headlines and body text. Components are minimalist, often ghosted or subtly outlined, relying on content and brand blue for emphasis rather than heavy styling or dramatic elevation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000E1F | neutral | Primary text, prominent headings, interface icons, card text. Also background for dark sections to create high contrast |
| Ocean Blue | #0000C5 | brand | Violet action color for filled buttons, selected navigation states, and focused conversion moments |
| Polar White | #FFFFFF | neutral | Page background, card surfaces, interactive elements backgrounds, secondary text on dark surfaces |
| Sky Blue | #1A1ACB | brand | Accents for borders and interactive elements, slightly lighter than Ocean Blue, providing a subtle variant for interactive states or secondary branding |
| Slate Border | #1A2635 | neutral | Strong borders, primarily for structural elements or when separating distinct content blocks |
| Light Mist | #E6E7E9 | neutral | Subtle borders, dividers, ghost element outlines. Provides minimal separation without visual weight |
| Subtle Gray | #DCDDDF | neutral | Slightly stronger borders and inactive element outlines, used for definition without being stark |
| Off-White Canvas | #F4F4F4 | neutral | Secondary background for cards or sections, providing a slight uplift from the main white canvas |
| Midtone Gray | #666E79 | neutral | Muted text, secondary information, helper text. Provides lower contrast for less prominent content |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT Walsheim Pro | system-ui, sans-serif | 400, 500, 700, 900 | 11px, 12px, 13px, 15px, 16px, 20px, 26px, 30px, 38px, 44px, 70px | 1.00, 1.10, 1.20, 1.40 | Brand typeface for all primary content: headlines, body text, navigation, and buttons. Its geometric forms provide a modern, friendly character. The range of weights allows for distinct visual hierarchy without changing families. |
| sans-serif |  | 400, 700 | 16px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| Arial |  | 400 | 13px | 1.4 | Arial — detected in extracted data but not described by AI |
| GT-Walsheim-Pro |  | 400 | 18px | 1.2 | GT-Walsheim-Pro — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.4 |  |
| body | 15 | 1.4 |  |
| body-lg | 18 | 1.2 |  |
| subheading | 20 | 1.2 |  |
| heading-sm | 26 | 1.2 |  |
| heading | 38 | 1.1 |  |
| heading-lg | 44 | 1.1 |  |
| display | 70 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "badges": "0px",
    "inputs": "30px 0px 0px 30px",
    "buttons": "30px"
  },
  "elementGap": "10px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Ghost Button

**Role:** Navigation links and subtle actions

Transparent background, Polar White text when on dark, Midnight Ink text when on light. Underlined with Ocean Blue on hover. No padding or border radius applied by default.

### Outline Pill Button

**Role:** Primary Call to Action

White background, Midnight Ink text, surrounded by a 1px solid black border. Has a 30px border-radius, creating a pill shape. Text is horizontally and vertically centered with no explicit padding.

### Product Card

**Role:** Displaying product items

Flexible background (transparent, Polar White, or Off-White Canvas), no box shadow or border radius. Content padding is 0px. Text color is Midnight Ink.

### Search Input Field

**Role:** User input for search

Polar White background, Midnight Ink text. Has a 1px light border of rgba(0, 14, 31, 0.15) on top, and a 30px 0px 0px 30px border radius (pill shape on the left). Padded 12px vertically and 16px horizontally.

### Badge (Neutral Text)

**Role:** Informational labels

Transparent background with Midnight Ink text. No border-radius or padding specified, allowing text to define size.

## Do's

- Prioritize GT Walsheim Pro at various weights and sizes for all text elements to maintain brand identity.
- Use Midnight Ink (#000E1F) for primary text and headings, employing it as the dominant dark element.
- Apply Polar White (#FFFFFF) as the default page background and for card surfaces, creating a bright base.
- Accent actions and navigational highlights with Ocean Blue (#0000C5) for distinct brand moments.
- Ensure interactive elements like buttons and inputs primarily feature a 30px border radius for a consistent pill-shaped aesthetic.
- Utilize Off-White Canvas (#F4F4F4) for secondary card backgrounds or section differentiation to add subtle depth.
- Limit borders to Light Mist (#E6E7E9) or Subtle Gray (#DCDDDF) for ghosting effects or minimal separation, avoiding heavy outlines.

## Don'ts

- Avoid using harsh, saturated colors outside the defined brand blue for general design elements; keep the palette disciplined.
- Do not introduce heavy drop shadows or significant elevation effects; the design relies on flat surfaces and subtle borders.
- Resist using generic sans-serif fonts; the custom GT Walsheim Pro is critical for the brand’s friendly yet confident tone.
- Do not deviate from the established 30px border-radius for interactive inputs and buttons, as it defines the component style.
- Refrain from using thick, dark borders on cards or product listings; maintain an open and lightweight feel.
- Avoid excessive spacing that leads to sparse layouts; aim for a compact density that feels efficient but not crowded.
- Do not rely on complex gradients; the system uses solid colors and minimal surface variation.

## Layout

The page model is a max-width contained layout, likely around 1200px, centered on a Polar White canvas. The hero prominently features a full-bleed lifestyle image with an overlaid centered headline and descriptive text. Section rhythm is consistent, primarily using clear vertical spacing between content blocks, often alternating between a main white background and an Off-White Canvas for subtle visual breaks. Content is arranged in flexible grid systems, particularly a 3-column product grid, and also features alternating text-left/image-right patterns for feature sections. Navigation is a sticky top bar with a centered brand logo and functional links to the left and right.

## Imagery

The imagery predominantly features lifestyle photography with a clear, bright color palette, emphasizing activity and vitality under natural, often blue-sky, conditions. Product imagery is clean, often showing items in context or as flat lays. Illustrations are minimal, primarily limited to the brand's iconic bear logo. Graphics serve a functional or decorative accent role. The overall density is balanced, allowing prominent section imagery to dominate without overwhelming the clean UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Everlane | Similar clean, largely monochrome aesthetic with a focus on product photography and ethical branding messaging. |
| Allbirds | Shares a light, airy design with a single prominent accent color for calls to action, combined with nature-focused imagery. |
| Bombas | Employs a clean, bright interface with strong brand colors in smaller doses for product showcasing and functional elements. |
| MeUndies | Uses playful imagery and a clean, product-centric layout, balancing white space with colorful product displays. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000E1F
- background: #FFFFFF
- border: #E6E7E9
- accent: #0000C5
- primary action: #0000c5 (filled action)

Example Component Prompts:
- Create a ghost button: transparent background, text in Midnight Ink (#000E1F), hover state underlines with Ocean Blue (#0000C5), no padding or border radius.
- Generate a product card: Off-White Canvas (#F4F4F4) background, no border, text in Midnight Ink (#000E1F), 0px border radius, 0px padding.
- Design a search input: Polar White (#FFFFFF) background, Midnight Ink (#000E1F) text, 1px top border of rgba(0, 14, 31, 0.15), 30px 0px 0px 30px border-radius, 12px vertical and 16px horizontal padding.
- Create a Primary Action Button: #0000c5 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519937357-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519937357-thumb.jpg |

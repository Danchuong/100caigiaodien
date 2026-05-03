# Heart Aerospace — Refero Style

- Refero URL: https://styles.refero.design/style/bf523387-03fc-4243-86ca-25af34daa0ce
- Site URL: https://heartaerospace.com
- ID: bf523387-03fc-4243-86ca-25af34daa0ce
- Theme: light
- Industry: other
- Created: 2026-04-30T01:31:40.606Z
- Ranks: newest: 582, popular: 777, trending: 551

> Overcast Sky, Silent Typography

## Description

Heart Aerospace employs a restrained, high-status design language: a monochrome canvas with minimal accentuation. Typography is the primary conveyor of hierarchy, utilizing subtle weight variations and precise letter-spacing. UI elements are understated, allowing large-scale imagery and bold headlines to dominate. The system relies on precise spacing to create rhythm rather than heavy visual dividers.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud Gray | #716e85 | neutral | Hero background, primary canvas for high-impact visual sections — provides a muted backdrop for white text and imagery; Background for hero sections, creating a fading transition from the primary Cloud Gray to Pure Canvas, suggesting atmosphere or horizon |
| Midnight Ink | #000000 | neutral | Primary text, general borders, footer background — establishes a base darkness for textual content and structural elements |
| Pure Canvas | #ffffff | neutral | Secondary text, active navigation items, general content backgrounds — provides contrast against darker neutrals |
| Electric Violet | #001489 | brand | Outlined links, interactive elements — a subtle, vivid accent that appears as a thin stroke or text highlight, creating a precise focal point without overwhelming the neutral palette |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NeueHaasText | Helvetica Neue, Arial | 400, 600 | 18px | 1.00, 1.30 | Body text, navigation, and most interactive elements. Its subtle letter-spacing contributes to the precise, understated tone. |
| NeueHaasDisplay | Helvetica Neue, Arial | 600 | 46px, 156px | 1.00 | Headlines and display text. The tight letter-spacing and considerable size difference from body text, combined with a subtle weight, creates visual impact through scale and precision rather than bolding. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 18 | 1.3 | -0.18 |
| heading | 46 | 1 | -0.92 |
| display | 156 | 1 | -3.12 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "18px",
  "sectionGap": "70px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Main navigation menu item

Text in NeueHaasText, weight 400, size 18px, Pure Canvas color (#ffffff) against hero background and Midnight Ink (#000000) against white, transitioning to Electric Violet (#001489) on hover for a subtle outline.

### Hero Headline

**Role:** Main page title for hero sections

NeueHaasDisplay, weight 600, size 156px, line-height 1, letter-spacing -0.02em. Color is Pure Canvas (#ffffff) on Cloud Gray (#716e85) background. Used for high-impact, short statements.

### Standard Headline

**Role:** Section and content headings

NeueHaasDisplay, weight 600, size 46px, line-height 1, letter-spacing -0.02em. Color is Midnight Ink (#000000), used where a bold statement is needed but with typographic restraint.

### Body Text

**Role:** Paragraphs and descriptive content

NeueHaasText, weight 400, size 18px, line-height 1.3, letter-spacing -0.01em. Color is Midnight Ink (#000000) against light backgrounds or Pure Canvas (#ffffff) against dark.

### Outlined Link

**Role:** Interactive links and calls to action

Text in NeueHaasText, weight 400, size 18px, color Electric Violet (#001489). Appears with a 1px border in Electric Violet (#001489) for interactive elements, providing a subtle but clear focus.

### Global Footer

**Role:** Bottom navigation and legal information

Full-width section with Midnight Ink (#000000) background. Text (links and standard copy) in Pure Canvas (#ffffff) using NeueHaasText, weight 400, size 18px. Minimal padding: 20px on left/right.

## Do's

- Prioritize NeueHaasDisplay (weight 600) for all headlines, ensuring tight letter-spacing of -0.02em for impact and precision.
- Use Cloud Gray (#716e85) as the background for hero sections to establish a muted, expansive canvas.
- Apply Electric Violet (#001489) sparingly, only as an outline or text color for key interactive elements, not as a solid background.
- Maintain ample vertical separation between sections, using a default sectionGap of 70px.
- Use Midnight Ink (#000000) for all primary body text and most structural borders to provide clear contrast.
- Ensure all interactive elements have a clear :hover state using Electric Violet (#001489) for visual feedback.
- Keep all corners sharp with 0px radius, reinforcing a precise, engineered aesthetic.

## Don'ts

- Avoid using saturation for decorative purposes; reserve Electric Violet (#001489) strictly for functional interaction.
- Do not use heavy box-shadows or gradients on UI elements; elevation is not a system-level visual cue.
- Do not use generic system fonts; always utilize NeueHaasDisplay or NeueHaasText for brand consistency.
- Do not use multiple colors for text hierarchy; vary only weight and size within the established typographic scale.
- Avoid excessive visual clutter; imagery and typography should be the primary focus.
- Do not introduce rounded corners (e.g., card or button radii) — maintain sharp, defined edges.
- Avoid visual dividers between sections; rely on background color changes or strong typographic breaks aided by sectionGap.

## Layout

The page primarily uses a full-bleed layout for hero sections, transitioning to a maximum-width contained layout for content blocks. The hero features large, often full-viewport imagery with centered, large-scale headlines overlaid. Subsequent sections alternate between light and dark backgrounds (Pure Canvas and Midnight Ink) with consistent vertical spacing of 70px. Content is often arranged in simple, centered stacks or 2-column layouts, with text beside visuals or logos in grid patterns. The navigation is a minimal top bar, which remains sticky, featuring text links and the brand logo.

## Imagery

The site heavily features high-quality, aspirational photography and detailed 3D renders of aircraft. These images are often full-bleed or large-scale hero elements, dominating the visual space. They serve to showcase the product and convey an ambitious, forward-looking atmosphere. The treatment is realistic, often depicting aircraft in flight or against dramatic skies, with a focus on product detail. Icons are minimal, monochromatic, and generally filled, integrated subtly next to text to provide functional clarity rather than decorative flair.

## Similar Brands

| Business | Why |
| --- | --- |
| Airbus | Shares a sophisticated, engineering-focused visual style with a prominent use of aircraft imagery and minimal UI elements. |
| Boom Supersonic | Utilizes large-scale hero imagery, a clean, spacious layout, and a focus on typography with a subtle, yet impactful accent color. |
| Lilium | Features advanced aerospace visuals, a largely monochrome palette, and a focus on product photography with clean, functional typography. |
| Joby Aviation | Exhibits a subtle, high-tech aesthetic with extensive use of sleek aircraft renders against atmospheric backgrounds and a preference for understated UI. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
text: #000000
background: #ffffff
border: #000000
accent: #001489
primary action: #001489 (outlined action border)

**3-5 Example Component Prompts:**
1. Create a hero section: Cloud Gray background (#716e85) with a centered headline 'Electrifying regional air travel' using NeueHaasDisplay weight 600, size 156px, Pure Canvas text (#ffffff), and -3.12px letter-spacing. Below the headline, add a small body paragraph in NeueHaasText weight 400, size 18px, Pure Canvas text (#ffffff).
2. Generate a navigation bar: Midnight Ink background (#000000), with 'Our mission' and 'Company' links using NeueHaasText weight 400, size 18px, Pure Canvas text (#ffffff). Links should have Electric Violet (#001489) top/bottom border on hover.
3. Design a content block: Pure Canvas background (#ffffff), containing a headline 'Climate' using NeueHaasDisplay weight 600, size 46px, Midnight Ink text (#000000), -0.92px letter-spacing. Below it, add a body paragraph 'Zero CO2 emissions on short routes.' using NeueHaasText weight 400, size 18px, Midnight Ink text (#000000).
4. Create a footer: Full-width section with a Midnight Ink background (#000000). On the left, display 'Navigation' in Pure Canvas (#ffffff) using NeueHaasText weight 600, size 18px. Below it, a list of links (e.g., 'Our mission', 'Company') in Pure Canvas (#ffffff) using NeueHaasText weight 400, size 18px. On the right, 'Address' in Pure Canvas (#ffffff) using NeueHaasText weight 600, size 18px, followed by address text in Pure Canvas (#ffffff) using NeueHaasText weight 400, size 18px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512680628-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512680628-thumb.jpg |
